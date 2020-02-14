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

		$(this).next('div.card-custom-normal')[0].click();

		// $('#tab_'+{{$asses_each->description}}_{{$asses_key}}).click();

	});

	var current_input;

	$("div[action='/study'] input, div[action='/study'] textarea").on('change',saveonchange);

	function saveonchange(event){
		let name = $(event.currentTarget).first().attr('name_');
		let value = $(event.currentTarget).first().val();
		let mrn = $(event.currentTarget).first().data('mrn');
		let diagcode = $(event.currentTarget).first().data('diagcode');
		let description = $(event.currentTarget).first().data('description');
		let _token = $('#_token').first().val();
		let questionnaire = $(event.currentTarget).first().data('questionnaire');
		let regdate = $(event.currentTarget).first().data('regdate');
		let progress = $(event.currentTarget).first().data('progress');
		let format = $(event.currentTarget).first().data('format');
		let tf_key = $(event.currentTarget).first().data('tf_key');
		let ta_key = $(event.currentTarget).first().data('ta_key');
		let checked = 'none';
		if(format == 'cb'){
			checked = $(event.currentTarget).first().is(":checked");
		}


		let rowdata={
			name:name,
			value:value,
			mrn:mrn,
			diagcode:diagcode,
			description:description,
			regdate:regdate,
			progress:progress,
			_token:_token,
			questionnaire:questionnaire,
			format:format,
			tf_key:tf_key,
			ta_key:ta_key,
			checked:checked
		}
		

		let formlink = $('#formlink').data('formlink');
		$.post( formlink, rowdata, function( data ) {
			if(name == 'Total Score' || name == 'Total BNI Score' ){
				return true;
			}

			iziToast.success({
			    title: 'Saved',timeout: 1000,
			    message: 'Question '+rowdata.name+' saved'
			});
			
		}).fail(function(data) {
			iziToast.error({
			    title: 'Error',timeout: 1000,
			    message: 'Question '+rowdata.name+' failed to saved',
			});
		})

		
	}

});