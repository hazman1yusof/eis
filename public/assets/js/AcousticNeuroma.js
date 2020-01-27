$(document).ready(function() {

	$("input[type='radio'][name_='Previous Surgery']").change(function(){
		let key = $(this).data('key');

		let value = $("input[type='radio'][name_='Previous Surgery'][data-key='"+key+"']:checked").val();

		if(value == 'op2'){
			$('#row_procedure_'+key+',#hr_procedure_'+key).hide();
		}else{
			$('#row_procedure_'+key+',#hr_procedure_'+key).show();
		}

	});

	init_procedure_div();
	function init_procedure_div(){
		for (var i = 0; i <= gkcasses_count; i++) {
			let value = $("input[type='radio'][name_='Previous Surgery'][data-key='"+i+"']:checked").val();

			if(value == 'op2'){
				$('#row_procedure_'+i+',#hr_procedure_'+i).hide();
			}else{
				$('#row_procedure_'+i+',#hr_procedure_'+i).show();
			}
		}
		
	}

});