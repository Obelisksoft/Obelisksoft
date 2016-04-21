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
			$('#dialog').modal('show');
		});

		$('#savaSerie').click(function(){
			$.ajax({
            type: "POST",
        	url: '/table/addnodo/',
        	data: $('form.saveSerie').serialize(),
            success: function(msg){
                    $("#dialog").modal('hide');
                    location.href='/table/retention/';
                 },
        	error: function(){
	            alert("failure");
	            }
            });
		});

		
		$.contextMenu({
        selector: '.context-menu-one', 
        callback: function(key, options) {
            var m = "clicked: " + key;
            if(key=='add'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	$('#dialog1').modal('show');
		    }

		    if(key=='edit'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	
            	
            	$.post('/table/getretention/?id_retention='+idnodo,function(data){
            			$("#nameSerie2").val(data);
            	});
            	
            	$("#editdialog1").modal('show');
            	//$("#nameSerie2").val("tales pues");
		    }

		    if(key=='delete'){
		    	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];

            	//var nameS = $('#nodo'+idnodo).val();
            	$.post('/table/getretention/?id_retention='+idnodo,function(data){
            			$('#seriedelete').html("<p> Delete "+data+"?</p>");
            	});
            	$('#deleteserie').modal('show');
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

            	$('#ifrtiposseries').attr('src','/documenttype/typeSubSerie/?id_retention='+idnodo);	
            	$('#dialog2').modal('show');
		    }

		    if(key=='edit'){
            	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];
            	
            	
            	$.post('/table/getretention/?id_retention='+idnodo,function(data){
            			$("#nameSerie2").val(data);
            	});
            	
            	$('#editdialog1').modal('show');
            	//$("#nameSerie2").val("tales pues");
		    }

		    if(key=='delete'){
		    	var id_nodo=$(this).attr('id');
            	id_nodo=id_nodo.split('nodo');
            	idnodo=id_nodo[1];

            	//var nameS = $('#nodo'+idnodo).val();
            	$.post('/table/getretention/?id_retention='+idnodo,function(data){
            			$('#subseriedelete').html("<p> Delete "+data+"?</p>");
            	});
            	$('#deletesub1').modal('show');
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

            	$('#ifindex').attr('src','/indexes/typeindex/?id_typedoc='+idnodo);	
            	$('#dialog3').modal('show');
		    }

            if(key=='edit'){
                var id_nodo=$(this).attr('id');
                id_nodo=id_nodo.split('nodo');
                idnodo=id_nodo[1];
                
                
                $.post('/table/getretention/?id_retention='+idnodo,function(data){
                        $("#nameSerie2").val(data);
                });
                
                $('#editdialog').dialog('open');
                //$("#nameSerie2").val("tales pues");
            }
        },
        items: {
            "add": {name: "Add Indexes", icon: "add", accesskey: "e"},
            "sep1": "---------",
            "quit": {name: "Quit", icon: "quit"}
        }
    });

	$('#saveSub').click(function(){
			$.ajax({
            type: "POST",
        	url: '/table/addnodoSub/?retention='+$('#nameSubSerie').val()+'&id_parent='+idnodo,
        	data: $('form.saveSubserie').serialize(),
            success: function(msg){
                    $("#dialog1").modal('hide');
                    location.href='/table/retention/';
                 },
        	error: function(){
	            alert("failure");
	            }
            });
		});

	$('#editSerie').click(function(){
			$.ajax({
            type: "POST",
        	url: '/table/editnodoSeries/?retention='+$('#nameSerie2').val()+'&id_retention='+idnodo,
        	data: $('form.editSerie').serialize(),
            success: function(msg){
                    $("#editdialog1").modal('hide');
                    location.href='/table/retention/';
                 },
        	error: function(){
	            alert("failure");
	            }
            });
		});

	$('#addType').click(function(){
			 var height = $(window).height() - 150;
        	$(".modal-body").height(height);
        	$("#dialog2").css({top: 50 });
			tiposseries.document.form.submit();
		});

	
	$('#addIndex').click(function(){
			 var height = $(window).height() - 150;
        	$(".modal-body").height(height);
        	$("#dialog3").css({top: 50 });
			typeindex.document.form.submit();
		});

	
$('#deleteSerie').click(function(){
	$.post('/table/deleteSerie/', { id_serie: idnodo },
			function(data){
				if(data=="OK"){
					location.href='/table/retention/';
				}else{
					alert("Can not delete Series has associated children !!");
				}
						   		
			});
			$(this).modal('hide');
		});

	$('#deleteSub').click(function(){
		$.post('/table/deleteSerieSub/', { id_subserie: idnodo },
						   function(data){
						   	if(data=="OK"){
						   		location.href='/table/retention/';
						   	}else{
						   		alert("Can not delete SubSeries has associated children !!");
						   	}
						   		
			});
		$(this).modal('hide');
	});

});