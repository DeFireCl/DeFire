$(window).ready(function () {


	/* Script Chosen */
	var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
    }

    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }


    /* Script Eliminar via AJAX */
   
    if ($('.btn-delete').length){

    	$(document).on('click','.btn-delete',function(){

    		var id 		= $(this).data('id');
			var form 	= $('#form-delete');
			var action 	= form.attr('action').replace('USER_ID', id);
			var row 	= $(this).parents('tr');

			$.ajax({
	            async       :   true,
	            data 		: 	form.serialize(),
	            type        :   "post",
	            url         :   action,
	            dataType    :   "json", 
	            success: function(data){

	            	row.hide('slow', function(){

	            		setTimeout (function () {
		                	row.remove();
		                	
		               	}, 3000);

		               	alert(data.msg);
	            	});				

	            }
	        });
    	});

   	}


   	$(".fecha").datepicker( {   dateFormat: "dd-mm-yy"   });

   	/*  Reset Form */
   	$(document).on('click', '.cerrarForm', function(){
   		$('.modal').modal('hide')
   	});

   	/* Agregar Representante Empresa */
   	$(document).on('click', '#addRepEmpresa', function(){
   		var rut 		= $("#re_rut").val();
   		var nombre 		= $("#re_nombre").val();
   		var apellido 	= $("#re_apellido").val();
   	});




   	// Mostrar Panel hide
   	$(document).on('click', '#showRepEmp', function(){
   		$("#addRepEmpresa").show('slow');
   		$(this).hide();
   		$("#hideRepEmp").show();
   	});
   	// cultar
   	$(document).on('click', '#hideRepEmp', function(){
   		$("#addRepEmpresa").hide('slow');
   		$(this).hide();
   		$("#showRepEmp").show();
   	});


});