$(document).ready(function(){
		/*$("#browser").treeview({
			collapsed:true,
			toggle: function() {
				console.log("%s was toggled.", $(this).find(">span").text());
			}
		});*/

		$(".folder").click(function() {
			var id_nodos=$(this).attr('att');
	        $.post('/table/getserie/?id_serie='+id_nodos,function(data){
            		$('#serie1').html("<p> Delete "+data+"?</p>");
            	});
		});

		$(".file").click(function() {
			var id_nodo=$(this).attr('id');
	        id_nodo=id_nodo.split('nodo');
	        idnodo=id_nodo[1];
			alert("subserie "+idnodo+" tipodocumental"+idnodos);
		});



     $("#newindice").click(function(){
     	$("#newIndex").modal('show');
     });

     $("#savaIn").click(function(){
            $.ajax({
            type: "POST",
        	url: "/indexes/createIndexAjax/",
        	data: $('form.saveIndex').serialize(),
            success: function(msg){
                    $("#newIndex").modal('hide');
                    location.href='/table/retention/';
                 },
        	error: function(){
	            alert("failure");
	            }
            });
    });

     $("#newtype").click(function(){
     	$("#newTypeDoc").modal('show');
     });

     $("#savaTy").click(function(){
            $.ajax({
            type: "POST",
        	url: "/documenttype/createTypeAjax/",
        	data: $('form.saveType').serialize(),
            success: function(msg){
                    $("#newTypeDoc").modal('hide');
                    location.href='/table/retention/';
                 },
        	error: function(){
	            alert("failure");
	            }
            });
    });
		
});