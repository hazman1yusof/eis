$(document).ready(function() {
	var input_tag = [];

	$('.card-custom-normal').click(function(){
		var description = $(this).data('description');

		$( this ).toggleClass( "_selected" );
		$('#'+current_tab).toggleClass( "_selected" );
		current_tab = 'tab_'+description;

		$('#div_'+description).toggleClass( "_hidediv" );
		$('#'+current_div).toggleClass( "_hidediv" );
		current_div = 'div_'+description;

		// input_tag.length = 0;
		// $('#form_'+description).trigger('reset');
	});

	// $('input[type="checkbox"]').change(function(){
	// 	if($(this).is(":checked")){
	// 		input_tag.push($(this).data('question'));
	// 	}else{
	// 		if(input_tag.includes($(this).data('question'))){
	// 			var index = input_tag.indexOf($(this).data('question'));
	// 			input_tag.splice(index, 1);
	// 		}
	// 	}
	// 	console.log(input_tag);
	// });
});