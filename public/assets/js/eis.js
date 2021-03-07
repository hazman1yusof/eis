$(document).ready(function() {
    var t_config = {
        class: 'test',
        message: 'Loading Data, Please Wait',
        theme: 'light', // dark
        color: 'green', 
        position: 'center',
        close:false,
        timeout: 50000,
        drag: false,
        progressBar: true,
        overlay: true,
        overlayClose: false,
        displayMode:2,
        onOpening: function () {},
        onOpened: function () {
            // toast = document.querySelector('.iziToast');
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
    var db_dis_init = false;
    var db_reg = null;
    var db_reg_init = false;

    $('input[name="type"]').change(function(){
        getDB($(this).val());
    });

    getDB('dis');

    function getDB(type){
        if(type == 'dis'){
            dis.getItem('db').then(function(value) {
                if(value == null){
                    fetchjson(type); //kalau db xde fetch suma
                }else{
                    if(!db_dis_init){
                        db_dis_init = true;
                        fetchjson(type,'init'); //kalau db ade, tp kali pertama load, fetch last month
                    }else{
                        db_dis = value; //kalau db ade, bukan pertama, fetch local
                        pivot(type);
                    }
                }
            }).catch(function(err) {
                console.log(err);
            });
        }else if(type == 'reg'){
            reg.getItem('db').then(function(value) {
                if(value == null){
                    fetchjson(type); //kalau db xde fetch suma
                }else{
                    if(!db_reg_init){
                        db_reg_init = true;
                        fetchjson(type,'init'); //kalau db ade, tp kali pertama load, fetch last month
                    }else{
                        db_reg = value; //kalau db ade, bukan pertama, fetch local
                        pivot(type);
                    }
                }
            }).catch(function(err) {
                console.log(err);
            });
        }
    }

    function fetchjson(type,init="notinit"){
        iziToast.show(t_config);
        $.getJSON("pivot_get?action=get_json_pivot_epis&datetype="+type+"&init="+init, function(mps) {
            loadDB(type,mps,init);
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

    function loadDB(type,mps,init){
        if(init=='init'){
            var year = 'Y'+ moment().year();
            var month = 'M'+ str_pad((moment().month()+1).toString(), 2, '0', 'STR_PAD_LEFT');
            if(type == 'dis'){
                dis.getItem('db').then(function(value) {
                    value = value.filter(function(e,i){
                        if(e.month == month && e.year == year){
                            return false;
                        }
                        return true;
                    });
                    value = value.concat(mps);
                    dis.setItem('db', value).then(function(value) {
                        db_dis = value;
                        pivot(type);
                        hideToast();
                    });
                })
            }else if(type == 'reg'){
                reg.getItem('db').then(function(value) {
                    value = value.filter(function(e,i){
                        if(e.month == month && e.year == year){
                            return false;
                        }
                        return true;
                    });
                    value = value.concat(mps);
                    reg.setItem('db', value).then(function(value) {
                        db_reg = value;
                        pivot(type);
                        hideToast();
                    })
                })
            }
        }else{

            if(type == 'dis'){
                dis.setItem('db', mps).then(function(value) {
                    db_dis = value;
                    pivot(type);
                    hideToast();
                });
            }else if(type == 'reg'){
                reg.setItem('db', mps).then(function(value) {
                    db_reg = value;
                    pivot(type);
                    hideToast();
                });
            }
        }
    }

    function hideToast(){
        var toast = document.querySelector('.iziToast');
        iziToast.hide({}, toast);
    }

    function str_pad(str, pad_length, pad_string, pad_type){
        var len = pad_length - str.length;
        if(len < 0) return str;
        for(var i = 0; i < len; i++){
            if(pad_type == "STR_PAD_LEFT"){
                str = pad_string + str;
            }else{
                str += pad_string;
            }
        }

        return str;

    }

} );