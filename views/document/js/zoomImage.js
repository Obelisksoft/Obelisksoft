$(document).ready(function(){
	pageSetUp();
  var iviewer = {};
  
  $("#viewer").iviewer({
	  
    src:"/uploads/"+$('#viewer').attr("alt"),
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
  var fold = $('#viewer').attr("tal");
  var i=0;

  $(".pagina").html((i+1)+' de '+cont+' Paginas');
  //siguiente pagina
  $('.righttem').click(function(){
	  var cont = $('#viewer').attr("scr");
	  if((i+1)<cont){
		i++;
		$(".pagina").html((i+1)+' de '+cont+' Paginas');
		var cont = $('#viewer').attr("scr");
		$.post( "/image/nextImage/",{ folder: fold ,inicio:i }, function(data) {
		  $('.trim').html(data);
		  iviewer.loadImage("/uploads/"+fold+"/"+data);
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
			  $.post( "/image/nextImage/",{ folder: fold ,inicio:i }, function(data) {
				  $('.trim').html(data);
				  iviewer.loadImage("/uploads/"+fold+"/"+data);
			      return false;
			});
	  }  
  });
  
  $('.file-add-trd').click(function(){
	  location.href='/document/newdocumenttrd/?folder='+$('.file-add-trd').attr("alt");;	  
  });
});