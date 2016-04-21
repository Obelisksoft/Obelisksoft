$(document).ready(function(){
    $( ".delete" ).click(function() {
        //alert( "Handler for .click() called." );
        id_user=$(this).attr('alt');
        $('#dialog').dialog('open');
    });

    $('#dialog').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/user/delete/', { id_users: id_user },
						   function(data){
						   		location.href='/user/';
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
			$( "#tagsfirst" ).focus();
	});

	var availableTagsFirstName = '/user/autocompletUserFirst/';

    $( "#tagsfirst" ).autocomplete({
      source: availableTagsFirstName
    });

    var availableTagsLastname = '/user/autocompletUserLast/';

    $( "#tagslast" ).autocomplete({
      source: availableTagsLastname
    });

    var availableTagsEmail = '/user/autocompletUserEmail/';

    $( "#tagsemail" ).autocomplete({
      source: availableTagsEmail
    });

     $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});

});