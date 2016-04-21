$(document).ready(function(){    
    var tipo = $("#type").val();

    var vandera;
   $('#campos').hide();
    var html ='';
    var nextinput = 0;
   
    $("#type").change(function(){
    	var tipo = $("#type").val();
    	
    	if(tipo==5){
    		$('#campos').show();
    		
    	}else{
    		html='';
    		$('#campos').hide();
    	}    	
    	
    	$('#addIndex').click(function(){
    		nextinput++;
    		html='<section class="col col-4">'+
                          '<label class="input">'+
                            '<input type="text" placeholder="ID" id="id_'+ nextinput+'" name="id[]">'+
                          '</label>'+
                    '</section>'+
                    '<section class="col col-6">'+
                          '<label class="input">'+
                            '<input type="text" placeholder="Value" id="value_'+nextinput+'" name="value[]">'+
                          '</label>'+
                    '</section>'+
                    '<section class="col col-2">'+
                     	'<label class="input">'+
                          '<a type="button" class="btn btn-danger btn-sm" id="delete_'+nextinput+'" alt="'+nextinput+'">Delete</a>'+
                        '</label>'+
                    '</section>';
                    vandera++;
                    $('#camposindice').append(html);
    	});    	

    	$('#delete_'+vandera).click(function(){
    		var tal = $('#delete').attr('alt');
    		alert(tal);
    	});

    });
    
});