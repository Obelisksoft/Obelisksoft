$(document).ready(function(){
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_rol=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/rol/delete/', { id_role: id_rol },
						   function(data){
						   		location.href='/rol/';
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

	 var availableTags = '/rol/autocompletRol/';

    $( "#tags" ).autocomplete({
      source: availableTags
    });


});