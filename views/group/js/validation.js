$(document).ready(function(){
	pageSetUp();
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_group=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/group/delete/', { id_group: id_group },
						   function(data){
							   if(data=='ERROR'){
							   		alert("Have Users in the Group !!");
							   	}else{
							   		location.href='/group/';
							   	}						   		
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

	 var availableTags = '/group/autocompletGroup/';

    $( "#tags" ).autocomplete({
      source: availableTags
    });


});