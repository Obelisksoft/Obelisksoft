$(document).ready(function(){
	pageSetUp();
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_typedocs=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/documenttype/delete/', { id_typedoc: id_typedocs },
						   function(data){
						   		location.href='/documenttype/';
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
	});

	 var availableTags = '/documenttype/autocompletTypeDoc/';

    $( "#tags" ).autocomplete({
      source: availableTags
    });

   
});