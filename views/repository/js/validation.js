$(document).ready(function(){
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_repository=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/repository/delete/', { id_repository: id_repository },
						   function(data){
						   		location.href='/repository/';
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

	 var availableTags = '/repository/autocompletRepository/';

    $( "#tags" ).autocomplete({
      source: availableTags
    });


});