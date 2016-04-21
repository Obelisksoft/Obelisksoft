$(document).ready(function(){
		pageSetUp();
		/*$("#browser").treeview({
			collapsed:true,
			control:"#sidetreecontrol",
			toggle: function() {
				console.log("%s was toggled.", $(this).find(">span").text());
			}
		});*/
		
		/*$("#add").click(function() {
			var branches = $("<li><span class='folder'>New Sublist</span><ul>" + 
				"<li><span class='file'>Item1</span></li>" + 
				"<li><span class='file'>Item2</span></li></ul></li>").appendTo("#browser");
			$("#browser").treeview({
				add: branches
			});
		});*/

		$("#add").click(function() {
			$('#dialog').dialog('open');
		});

		$('#dialog').dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Ok: function() {
					$.post('/table/addnodoV/?valoration='+$('#nameSerie').val(), function(data) {
						location.href='/table/valoration/';
					});
				}
			}
															
		});		

		$.contextMenu({
        selector: '.context-menu-one', 
        callback: function(key, options) {
            var m = "clicked: " + key;
            if(key=='add'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	$('#dialog1').dialog('open');
		    }

		    if(key=='edit'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	
            	
            	$.post('/table/getvaloration/?id_valoration='+idnodo,function(data){
            			$("#nameSerie2").val(data);
            	});
            	
            	$('#editdialog').dialog('open');
            	//$("#nameSerie2").val("tales pues");
		    }

		    if(key=='delete'){
		    	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];

            	//var nameS = $('#nodo'+idnodo).val();
            	$.post('/table/getvalorationV/?id_valoration='+idnodo,function(data){
            			$('#seriedelete').html("<p> Delete "+data+"?</p>");
            	});
            	$('#seriedelete').dialog('open');
            	//$('#seriedelete').html("<p>"+nameS+"</p>");

		    }
        },
        items: {
            "add": {name: "Add SubSerie", icon: "add", accesskey: "A"},
             "edit": {name: "Edit Serie", icon: "edit", accesskey: "e"},
            "delete": {name: "Delete", icon: "delete"},
            "sep1": "---------",
            "quit": {name: "Quit", icon: "quit"}
        }
    });

	$.contextMenu({
        selector: '.context-menu-two', 
        callback: function(key, options) {
            var m = "clicked: " + key;
            if(key=='add'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	//$.post('/documenttype/typeSubSerie/?subserie='+idnodo);

            	$('#ifrtiposseries').attr('src','/documenttype/typeSubSerieV/?id_valoration='+idnodo);	
            	$('#dialog2').dialog('open');
		    }

		    if(key=='edit'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	
            	
            	$.post('/table/getvalorationV/?id_valoration='+idnodo,function(data){
            			$("#nameSerie2").val(data);
            	});
            	
            	$('#editdialog').dialog('open');
            	//$("#nameSerie2").val("tales pues");
		    }

		    if(key=='delete'){
		    	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];

            	//var nameS = $('#nodo'+idnodo).val();
            	$.post('/table/getvalorationV/?id_valoration='+idnodo,function(data){
            			$('#subseriedelete').html("<p> Delete "+data+"?</p>");
            	});
            	$('#subseriedelete').dialog('open');
            	//$('#seriedelete').html("<p>"+nameS+"</p>");

		    }
        },
        items: {
            "add": {name: "Add Document", icon: "add", accesskey: "e"},
             "edit": {name: "Edit SubSerie", icon: "edit", accesskey: "e"},
            "delete": {name: "Delete", icon: "delete"},
            "sep1": "---------",
            "quit": {name: "Quit", icon: "quit"}
        }
    });

	$.contextMenu({
        selector: '.context-menu-thre', 
        callback: function(key, options) {
            var m = "clicked: " + key;
            if(key=='add'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	//$.post('/documenttype/typeSubSerie/?subserie='+idnodo);

            	$('#ifindex').attr('src','/indexes/typeindexV/?id_typedoc='+idnodo);	
            	$('#dialog3').dialog('open');
		    }
        },
        items: {
            "add": {name: "Add Indexes", icon: "add", accesskey: "e"},
            "sep1": "---------",
            "quit": {name: "Quit", icon: "quit"}
        }
    });

	$('#dialog1').dialog({
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$.post('/table/addnodoSubV/?valoration='+$('#nameSubSerie').val()+'&id_parent='+idnodo, function(data) {
					location.href='/table/valoration/';
				});
			}
		}
															
	});

	$('#editdialog').dialog({
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$.post('/table/editnodoSeriesV/?valoration='+$('#nameSerie2').val()+'&id_valoration='+idnodo, function(data) {
					location.href='/table/valoration/';
				});
			}
		}
															
	});

	$('#dialog2').dialog({
		autoOpen: false,
		height:450,
		width: 290,
		modal: true,
		buttons: {
			Ok: function() {
				tiposseries.document.form.submit();
			}
		}
															
	});

	$('#dialog3').dialog({
		autoOpen: false,
		height:450,
		width: 290,
		modal: true,
		buttons: {
			Ok: function() {
				typeindex.document.form.submit();
			}
		}
															
	});

	$('#seriedelete').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/table/deleteSerieV/', { id_serie: idnodo },
						   function(data){
						   	if(data=="OK"){
						   		location.href='/table/valoration/';
						   	}else{
						   		alert("Can not delete Series has associated children !!");
						   	}
						   		
						   });
						$(this).dialog('close');
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				}
	});

	$('#subseriedelete').dialog({
				resizable: false,
				height:180,
				autoOpen: false,
				modal: true,
				buttons: {
					'OK': function() {
						$.post('/table/deleteSerieSubV/', { id_subserie: idnodo },
						   function(data){
						   	if(data=="OK"){
						   		location.href='/table/valoration/';
						   	}else{
						   		alert("Can not delete SubSeries has associated children !!");
						   	}
						   		
						   });
						$(this).dialog('close');
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				}
	});

});