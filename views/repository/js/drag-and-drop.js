$(document).ready(function(){
	// Example 1.1: A single sortable list
	$('#example-1-1 .sortable-list').sortable({
		placeholder: 'ui-state-highlight',
		update: function(event, ui) {
			var arr=$(this).children();
			var orden="";
			for (var i=0;i<arr.length;i++){
				orden=orden+arr[i].id+"|";
			}
			$.post("/repository/Orden/", { orden: orden });
		}	
	});

});