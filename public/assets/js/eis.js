$(document).ready(function() {

    document.getElementById('fromdate').valueAsDate = new Date();
    document.getElementById('todate').valueAsDate = new Date();

    var opts = {
        angle: -0.2, // The span of the gauge arc
        lineWidth: 0.2, // The line thickness
        radiusScale: 1, // Relative radius
        pointer: {
        length: 0.47, // // Relative to gauge radius
        strokeWidth: 0.026, // The thickness
        color: '#000000' // Fill color
        },
        limitMax: false,     // If false, max value increases automatically if value > maxValue
        limitMin: false,     // If true, the min value of the gauge will be fixed
        colorStart: '#6FADCF',   // Colors
        colorStop: '#8FC0DA',    // just experiment with them
        strokeColor: '#E0E0E0',  // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true,     // High resolution support
        staticZones: [
           {strokeStyle: "#F03E3E", min: 0, max: 50}, // Red from 100 to 130
           {strokeStyle: "#FFDD00", min: 50, max: 100}, // Yellow
           {strokeStyle: "#30B32D", min: 100, max: 200}, // Green
           {strokeStyle: "#FFDD00", min: 200, max: 250}, // Yellow
           {strokeStyle: "#F03E3E", min: 250, max: 300}  // Red
        ],
    };

    var target = document.getElementById('canvas-preview'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 300; // set max gauge value
    gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
    gauge.set(0); // set actual value

    var dis = localforage.createInstance({name: "db_dis"});
    var reg = localforage.createInstance({name: "db_reg"});

    var db_dis = null;
    var db_dis_init = false;
    var db_reg = null;
    var db_reg_init = false;

    $('input[name="type"]').change(function(){
        getDB($(this).val());
    });

    $('#fetch').click(function(){
        getDB($('input[name="type"]').val());
    });

    getDB('dis');

    function getDB(type){
        gauge.set(0);
        if(type == 'dis'){
            dis.getItem('db').then(function(value) {
                if(value == null){
                    fetchjson(type); //kalau db xde fetch suma
                }else{
                    if(!db_dis_init){
                        db_dis_init = true;
                        fetchjson(type,'init'); //kalau db ade, tp kali pertama load, fetch last month
                    }else{
                        var datefrom = moment($('#fromdate').val()).startOf('month');
                        var dateto = moment($('#todate').val()).endOf('month');
                        console.log(datefrom.format('DD MM YYYY'));
                        console.log(dateto.format('DD MM YYYY'));
                        console.log(value)
                        // value = value.filter(function(e,i){
                        //     if(e.month == month && e.year == year){
                        //         return false; //buang current month
                        //     }
                        //     return true;
                        // });
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
        // iziToast.show(t_config);
        var datefrom = $('#fromdate').val();
        var dateto = $('#todate').val();
        gauge.set(100);
        $.getJSON("pivot_get?action=get_json_pivot_epis&datetype="+type+"&datefrom="+datefrom+"&dateto="+dateto+"&init="+init, function(mps) {
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
                            return false; //buang current month
                        }
                        return true;
                    });
                    value = value.concat(mps); //load current month baru
                    dis.setItem('db', value).then(function(value) {
                        db_dis = value;
                        pivot(type);
                        gauge.set(300);
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
                        gauge.set(300);
                    })
                })
            }
        }else{

            if(type == 'dis'){
                dis.setItem('db', mps).then(function(value) {
                    db_dis = value;
                    pivot(type);
                    gauge.set(300);
                });
            }else if(type == 'reg'){
                reg.setItem('db', mps).then(function(value) {
                    db_reg = value;
                    pivot(type);
                    gauge.set(300);
                });
            }
        }
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