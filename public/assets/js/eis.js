$(document).ready(function() {
    var t_config = {
        class: 'test',
        message: 'Loading Data, Please Wait',
        theme: 'light', // dark
        color: 'green', 
        position: 'center',
        close:false,
        timeout: 5000,
        drag: false,
        progressBar: true,
        overlay: true,
        overlayClose: false,
        displayMode:2,
        onOpening: function () {},
        onOpened: function () {
            toast = document.querySelector('.iziToast');
            // iziToast.progress({}, toast).pause();
        },
        onClosing: function () {},
        onClosed: function () {}
    }

    document.addEventListener('iziToast-closing', function(data){
        if(data.detail.class == 'test'){
            toast = document.querySelector('.iziToast');
            iziToast.progress({}, toast).pause();
        }
    });

    var dis = localforage.createInstance({name: "db_dis"});
    var reg = localforage.createInstance({name: "db_reg"});

    var db_dis = null;
    var db_reg = null;

    $('input[name="type"]').change(function(){
        getDB($(this).val());
    });

    getDB('dis');

    function getDB(type){
        if(type == 'dis'){
            dis.getItem('db').then(function(value) {
                if(value == null){
                    fetchjson(type)
                }else{
                    db_dis = value;
                    pivot(type)
                }
            }).catch(function(err) {
                console.log(err);
            });
        }else if(type == 'reg'){
            reg.getItem('db').then(function(value) {
                if(value == null){
                    fetchjson(type)
                }else{
                    db_reg = value;
                    pivot(type)
                }
            }).catch(function(err) {
                console.log(err);
            });
        }
    }

    function fetchjson(type){
        iziToast.show(t_config);
        $.getJSON("pivot_get?action=get_json_pivot_epis&datetype="+type, function(mps) {
            if(type == 'dis'){
                db_dis = mps;
                dis.setItem('db', mps).then(function(value) {
                    var toast = document.querySelector('.iziToast');
                    iziToast.hide({}, toast);
                    db_dis = value;
                    pivot(type)
                }).catch(function(err) {
                    console.log(err);
                });

            }else if(type == 'reg'){
                db_reg = mps;
                reg.setItem('db', mps).then(function(value) {
                    var toast = document.querySelector('.iziToast');
                    iziToast.hide({}, toast);
                    db_dis = value;
                    pivot(type)
                }).catch(function(err) {
                    console.log(err);
                });
            }
        });
    }

    var derivers = $.pivotUtilities.derivers;
    var renderers = $.extend($.pivotUtilities.renderers,$.pivotUtilities.plotly_renderers);

    function pivot(type){
        var mps = null;
        if(type == 'dis'){
            mps = db_dis;
        }else if(type == 'reg'){
            mps = db_reg;
        }

        mps.filter(function(e,i){
            if(e.datetype == type){
                return true;
            }
        });
        
        $("#output").pivotUI(mps, {
            renderers: renderers,
            unusedAttrsVertical: false,
            cols: ["month"], rows: ["religion"],
            rendererName: "Table",
            rowOrder: "value_z_to_a", colOrder: "value_z_to_a",
        });
    }
} );