$(document).ready(function() {

	$('.card-custom-normal').click(function(){
		var description = $(this).data('description');

		$( this ).toggleClass( "_selected" );
		$('#'+current_tab).toggleClass( "_selected" );
		current_tab = 'tab_'+description;

		$('#div_'+description).toggleClass( "_hidediv" );
		$('#'+current_div).toggleClass( "_hidediv" );
		current_div = 'div_'+description;
	});

	$('.card-custom').click(function(){
		var id = $(this).attr('id');

		if(current_card != id){
			$("div."+current_card).each(function(i){
				$(this).toggleClass( "_hidediv" );
			});

			$("div."+id).each(function(i){
				$(this).toggleClass( "_hidediv" );
			});
		}

		$( this ).toggleClass( "selected_card" );
		$('#'+current_card).toggleClass( "selected_card" );

		current_card = id;

	});

	var current_input;

	$("div[action='/study'] input").on('change',function(){

		let name = $(this).first().attr('name_');
		let value = $(this).first().val();
		let mrn = $(this).first().data('mrn');
		let diagcode = $(this).first().data('diagcode');
		let description = $(this).first().data('description');
		let _token = $('#_token').first().val();
		let questionnaire = $(this).first().data('questionnaire');
		let format = $(this).first().data('format');
		let checked = 'none';
		if(format == 'cb'){
			checked = $(this).first().is(":checked");
		}


		// console.log($(this).first().attr('name'));

		let rowdata={
			name:name,
			value:value,
			mrn:mrn,
			diagcode:diagcode,
			description:description,
			_token:_token,
			questionnaire:questionnaire,
			format:format,
			checked:checked
		}
		

		let formlink = $('#formlink').data('formlink');
		$.post( formlink, rowdata, function( data ) {
			iziToast.success({
			    title: 'Saved',
			    message: 'Question '+rowdata.name+' saved'
			});
		}).fail(function(data) {
			iziToast.error({
			    title: 'Error',
			    message: 'Question '+rowdata.name+' failed to saved',
			});
		})

		

	});

	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
			timer = setTimeout(callback, ms);
		};
	})();


});