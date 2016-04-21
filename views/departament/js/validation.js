$(document).ready(function(){
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_departament=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/departament/delete/', { id_departament: id_departament },
						   function(data){
						   		location.href='/departament/departament/';
						   });
						$(this).dialog('close');
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				}
	});
	
	$('.search').click(function(){
			$('.form-group').toggle("fast");
			 $( "#tags" ).focus();
	});

	 var availableTags = '/departament/autocompletDepartament/';

    $( "#tags" ).autocomplete({
      source: availableTags
    });


});