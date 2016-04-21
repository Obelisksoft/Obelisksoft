$(document).ready(function(){
	pageSetUp();
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_indexes=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/indexes/delete/', { id_index: id_indexes },
						   function(data){
						   		location.href='/indexes/';
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

	var availableTagsIndex = '/indexes/autocompletIndex/';

    $( "#tags" ).autocomplete({
      source: availableTagsIndex
    });

});