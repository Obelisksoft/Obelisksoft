$(document).ready(function() {

	$("#addocuments").click(function() {
			$('#uploadlos').modal('show');
	});

		//$('#uploadLo').click(function(){
		//	location.href='/logo';

  		//});

	$('#uploadLos').click(function(){
		alert("hola");
	});

	var pagefunction = function() {		
		$("#mydropzones").dropzone({
			url: "/logo/uploads/",
			//addRemoveLinks : true,
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
		loadScript("/public/js/dropzone/dropzone.min.js", pagefunction);
	};
	
	

});