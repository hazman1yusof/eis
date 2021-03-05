$(document).ready(function() {

    $('input[name="type"]').change(function(){
        fetchjson($(this).val())
    });

    var pivot_obj = ['null'];
    var derivers = $.pivotUtilities.derivers;
    var renderers = $.extend($.pivotUtilities.renderers,$.pivotUtilities.plotly_renderers);

    fetchjson('reg');
    function fetchjson(type){
        if(pivot_obj == null){
            $.getJSON("pivot_get?type="+type, function(mps) {
                pivot_obj = mps;
                pivot(mps,type);
            });
        }else{
            pivot(pivot_obj,type);
        }
    }

    function pivot(mps,type){
        let mps_ = mps.filter(function(e,i){
            if(e.datetype == type){
                return true;
            }
        });
        
        $("#output").pivotUI(mps_, {
            renderers: renderers,
            unusedAttrsVertical: false,
            cols: ["month"], rows: ["religion"],
            rendererName: "Table",
            rowOrder: "value_z_to_a", colOrder: "value_z_to_a",
            // rendererOptions: {
            //    c3: {
            //       size: { height:44, width:44}
            //    }
            // }
        });
    }
} );