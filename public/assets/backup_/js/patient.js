$(document).ready(function() {

	var table = $('#example').DataTable( {
	} );

	$('#example tbody').on( 'click', 'tr', function () {
		// $('#pathref').attr('href','/')

        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

    	var oData = table.rows('.selected').data();
    	$('#pathref').attr('href','./study/'+oData[0][0]);
    } );

    $('#pathref').click( function () {

    	
    } );


});