$(document).ready(function() {
	pageSetUp();
	//$('#modal').modal('show');
	
	$(".myModal").click(function(){
		$('#modal').modal('show');
	});

	/*$("#modal").dialog({
		autoOpen: false,
		width: 400,
		modal: true,
		buttons: {
			'OK': function() {
				if (($("#busidexp").val()!="")){
					location.href="/busqueda/visor/?id_expediente="+$("#busidexp").val();
				}else
					alert("Digite el ID Expediente!");
				},
			'Cancelar': function() {
				$(this).dialog('close');
			}
		}
	});*/

	$('#saveDocument').click(function(){
		if (($("#busidexp").val()!="")){
					location.href="/busqueda/visor/?id_expediente="+$("#busidexp").val();
				}else{
					alert("Digite el ID Expediente!");
				}
	});

	$("#datail").click(function(){
		alert("imagen");
	});

	var pagefunction = function() {
		
		$("#mydropzone").dropzone({
			url: "/document/uploads/",
			addRemoveLinks : true,
			removedfile: function(file) {
		    var name = file.name;        
		    $.ajax({
		        type: 'POST',
		        url: '/document/deletetmp/',
		        data: "id="+name,
		        dataType: 'html'
		    });
		},
			maxFilesize: 100,
			dictResponseError: 'Error uploading file!'
		});
		
	};

	loadScript("/public/js/dropzone/dropzone.min.js", pagefunction);

	var eti = $('#oculto').val();	

	$('#createDoc').click(function(){
		//$('#myModal').modal('hide');
		
	});

	//serealizar formulario
	$("#savetrd").click(function(){
		$('#moda').modal('show');
	});
		//$('#moda').dialog('open');
		//alert("tales");

	
	/*$("#moda").dialog({
		autoOpen: false,
		width: 335,
		height: 245,
		modal: true,
		resizable: false,
		buttons: [
			{
				text: "OK",
	            click: function() { 
	                var formulario = $("#formtrd").serializeArray();
			        $.ajax({
			            type: "POST",
			            dataType: 'json',
			            url: "/document/savedoctrd/",
			            data: formulario,
			        }).done(function(respuesta){
			            if(respuesta=="success"){
			            	location.href = '/document/newdocumenttrd/';
			            }
			            else{
			            	alert("tiene un error");
			            }
			          
			        });
	            },
	            class:"btn btn-primary"
           	},
           	{
           		text: "Cancel",
	            click: function() {
	            	$(this).dialog('close');

	            },
	            class:"btn btn-warning"
           	}
       ]
		*/
	//});

$('#saveDoc').click(function(){
		var formulario = $("#formtrd").serializeArray();
			        $.ajax({
			            type: "POST",
			            dataType: 'json',
			            url: "/document/savedoctrd/",
			            data: formulario,
			        }).done(function(respuesta){
			            if(respuesta=="success"){
			            	location.href = '/document/newdocumenttrd/';
			            }
			            else{
			            	alert("tiene un error");
			            }
			          
			        });
	});

	

});


