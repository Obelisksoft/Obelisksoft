$(document).ready(function(){

	$('#searchtrd').click(function(){
		var formulario = $("#formtrd").serializeArray();
        //alert(formaulario);
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/search/getsearchtrd/",
            data: formulario,
        }).done(function(respuesta){
        	$(".resulttrd").html('');
        	var html2="";
        	var html3="";
        	var html4="<div class='search-results clearfix'>";
        	var j=0;
        	for(var i = 0; i < respuesta.length; i++){
                html2+=('<h4><a href="/document/viewdocument/?hastdocument='+respuesta[i].ID_HASTDOCUMENT+'"><strong>'+respuesta[i].SERIE+' - '+respuesta[i].SUB_SERIE+' - '+respuesta[i].TYPEDOCUMENT+'</strong></a></h4>'
                    +'<div><p class="note"><a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a></p>'
                        +'<div class="url text-success">'
                            +respuesta[i].NAME_DOCUMENT+'<i class="fa fa-caret-down"></i></div>'
                        +'<p class="description">');
                var stri=respuesta[i].SEARCH;
                var strarr=stri.split("=");
                var strvar=strarr[1];
                var sea = strvar.split(",");
                 var sea = strvar.split(",");
                for(j=0; j<sea.length;j++){
                    html2+=html3+''+sea[j]+'<br>';
                }  

                html4=html3+html2+'</p></div><hr>';    

            }
            $(".resulttrd").html(html4);
        });
	});
});