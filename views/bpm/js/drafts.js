$(document).ready(function() {
	        $.get('http://obelisksoft.com/uploads/app-data.json', function(appdata) {
	          var apiserver = 'http://192.168.0.43/api/1.0/workflow/';
	          var endpoint = 'cases/draft';
	 
	          $.ajax({  
	             url: apiserver + endpoint,
	             type: 'GET',    
	             contentType: false,
	             beforeSend: function(request) {
	                request.setRequestHeader('Authorization', 'Bearer ' + appdata.access_token);
	             },
	             success: function (data) {
	                console.log(data);
	                $.each(data, function(index, record) {
	                   $('#todo-list').append('<li><a>'+record.app_number+' '+record.app_title+' '+record.app_tas_title+'</a></li>');
	                });
	             }
	          });
	        })
	      });