$(document).ready(function(){
	pageSetUp();
  var iviewer = {};
  
  $("#viewer").iviewer({
	  
    src:"/temp/"+$('#viewer').attr("alt"),
    update_on_resize: false,
    initCallback: function(){
    	var object = this;
    	$("#in").click(function(){ 
    		object.zoom_by(1);
    	}); 
        $("#out").click(function(){ 
        	object.zoom_by(-1);
        }); 
        iviewer = this;
    }
  });
  var cont = $('#viewer').attr("scr");
  var doc = $('#viewer').attr("doc");
  var orden = $('#viewer').attr("ord");
  var ext = $('#viewer').attr("ext");
  var i=0;

  $(".pagina").html((i+1)+' de '+cont+' Paginas');
  //siguiente pagina
  $('.righttem').click(function(){
	  var cont = $('#viewer').attr("scr");
	  if((i+1)<cont){
		i++;
		$(".pagina").html((i+1)+' de '+cont+' Paginas');
		var cont = $('#viewer').attr("scr");
		$.post( "/image/nextImage2/",{ documento: doc ,inicio:i, orden:i+1, ext:ext }, function(data) {
		  $('.trim').html(data);
		  iviewer.loadImage("/temp/"+data);
		  return false;
		});  
	  }	  
  });
  
  //pagina aterior
  $('.lefttem').click(function(){	  
	  if(i != 0){
		  i--;
		  var cont = $('#viewer').attr("scr");
		  $(".pagina").html((i+1)+' de '+cont+' Paginas');  
			  var cont = $('#viewer').attr("scr");
			  $.post( "/image/nextImage2/",{ documento: doc ,inicio:i, orden:i+1, ext:ext}, function(data) {
				  $('.trim').html(data);
				  iviewer.loadImage("/temp/"+data);
			      return false;
			});
	  }  
  });
  
  //$('.file-add-trd').click(function(){
	  //location.href='/document/newdocumenttrd/?folder='+$('.file-add-trd').attr("alt");;	  
  //});
});