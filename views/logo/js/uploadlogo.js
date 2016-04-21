$(document).ready(function() {


	/*$('.superbox-list').click(function(){
		alert(($this).attr('alt'));
	});*/

	$(".superbox-img").click(function(){
		var img = $(this).attr('data-img');
		var tal = $(this).attr('alt');
		$(".apli").html('<img src="'+img+'" sizes="76x76" id="imag" alt="'+tal+'"></img>');
		$("#aplicate").modal('show');
	});

	$("#aplicats").click(function(){
		var al = $("#imag").attr('alt');
		/*$.post('/logo/changelogo/?id_logo='+al,function(data){
            		
         });*/

		$.ajax({
		        type: 'POST',
		        url: '/logo/changelogo/',
		        data: "id_logo="+al,
		        dataType: 'html'
		    }).done(function(respuesta){
			            if(respuesta="OK"){
			            	location.href='/logo';
			            }
			            else{
			            	alert("tiene un error");
			            }
			        });



	});

	$("#deletes").click(function(){
		var al = $("#imag").attr('alt');
		/*$.post('/logo/changelogo/?id_logo='+al,function(data){
            		
         });*/

		$.ajax({
		        type: 'POST',
		        url: '/logo/delete/',
		        data: "id_logo="+al,
		        dataType: 'html'
		    }).done(function(respuesta){
			            if(respuesta="OK"){
			            	location.href='/logo';
			            }
			            else{
			            	alert("tiene un error");
			            }
			        });
	});

	$("#uploads").click(function() {
			$('#uploadlo').modal('show');
		});

		$('#uploadLo').click(function(){
			location.href='/logo';

  		});

		var pagefunction = function() {
		
		$("#mydropzone").dropzone({
			url: "/logo/uploads/",
			addRemoveLinks : true,
			removedfile: function(file) {
		    var name = file.name;        
		    $.ajax({
		        type: 'POST',
		        url: '/document/deletetmp/',
		        data: "id="+name,
		        dataType: 'html'
		    });
		},
			maxFilesize: 100,
			dictResponseError: 'Error uploading file!'
		});
		
	};
	loadScript("/public/js/dropzone/dropzone.min.js", pagefunction);

	var pagefunction = function() {
		
		$('.superbox').SuperBox();
		
		
	};
	
	// end pagefunction
	
	// run pagefunction on load

	// load bootstrap-progress bar script
	//loadScript("/public/js/superbox/superbox.min.js", pagefunction);


});

