$(document).ready(function(){
		$("#browser").treeview({
			collapsed:true,
			toggle: function() {
				console.log("%s was toggled.", $(this).find(">span").text());
			}
		});

		$(".folder").click(function() {
			$('.serieT').html("<p> Delete?</p>");
		});

		$('#input1').immybox({
		  choices: [
		    {text: 'Alabama', value: 'AL'},
		    {text: 'Alaska', value: 'AK'},
		    ...
		    {text: 'Wisconsin', value: 'WI'},
		    {text: 'Wyoming', value: 'WY'}
		  ]
		})


            		


		/*$(".file").click(function() {
			var id_nodo=$(this).attr('id');
	        id_nodo=id_nodo.split('nodo');
	        idnodo=id_nodo[1];
			alert("subserie "+idnodo+" tipodocumental"+idnodos);
		});*/

		/*$("#iframeID").load(function () {
			$(".folder").click(function() {
			alert($(this.contentDocument).find('#serieT').html());
 			}); 
		});*/
		
});