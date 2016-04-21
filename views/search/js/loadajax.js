$(document).ready(function(){
     $( "#datepicker6" ).datepicker({dateFormat: 'yy-mm-dd'});
     $( "#datepicker2" ).datepicker({dateFormat: 'yy-mm-dd'});

    var getSubserie = function(){
        var serie = $("#serie").val();
        var j=0;
         $(".resulttrd").html('');
         $.post('/search/getSearchSerie/','serie=' + serie ,function(datoss){
            
            $("#subserie").html('');
            var html="";
            var html2="";
            var html3="<div class='search-results clearfix'>";
            for(var i = 0; i < datoss.length; i++){
                html+=('<h4><a href="/document/viewdocument/?hastdocument='+datoss[i].ID_HASTDOCUMENT+'"><strong>'+datoss[i].SERIE+'</strong></a></h4>'
                    +'<div><p class="note"><a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a></p>'
                        +'<div class="url text-success">'
                            +datoss[i].NAME_DOCUMENT+'<i class="fa fa-caret-down"></i></div>'
                        +'<p class="description">');
                var stri=datoss[i].SEARCH;
                var strarr=stri.split("=");
                var strvar=strarr[1];

                var sea = strvar.split(",");
                
                for(j=0; j<sea.length;j++){
                    html+=html2+''+sea[j]+'<br>';
                }
                html3=html+html2+'</p></div><hr>';           
            }
            $(".resulttrd").html(html3);
            
        },'json');
       
        $.post('/search/getSubserie/','serie=' + $("#serie").val(),function(datos){
            
            $("#subserie").html('');
            $("#typedocment").html('');
             $(".fields").html('');
                $("#subserie").append('<option value=""> --Select--</option>');
            for(var i = 0; i < datos.length; i++){
                $("#subserie").append('<option value="' + datos[i].id_retention + '">' + datos[i].retention + '</option>');
            }
            
        }, 'json');        

    }
    
    $(".serie").click(function(){
        $.get( "#ajax/", function( data ) {
        $( ".result" ).html( data );        
        //alert( "Load was performed." );
});
    });


    $("#serie").change(function(){
        
        if(!$("#serie").val()){
            $("#subserie").html('');
            $(".fields").html('');            
        }
        else{
           getSubserie();
           historial("serie",$("#serie").val());
           historial("subserie","");
           
        }

    });

    var getTypeDoc = function(){
        $(".resulttrd").html('');
        

        $.post('/search/getTypeDoc/','subserie=' + $("#subserie").val(),function(datoss){
            $("#typedocment").html('');
             $(".fields").html('');
                $("#typedocment").append('<option value=""> --Select--</option>');
            for(var j = 0; j < datoss.length; j++){
                $("#typedocment").append('<option value="' + datoss[j].id_typedoc + '">' + datoss[j].documenttype + '</option>');
            }
            
        }, 'json');
            var j=0;
            var html="";
            var html2="";
            var html3="<div class='search-results clearfix'>";
         $.post('/search/getSearchSub/','serie=' + $("#serie").val()+'&subserie='+$("#subserie").val(),function(datosu){
            for(var i = 0; i < datosu.length; i++){
                html+=('<h4><a href="/document/viewdocument/?hastdocument='+datosu[i].ID_HASTDOCUMENT+'"><strong>'+datosu[i].SERIE+' - '+datosu[i].SUB_SERIE+'</strong></a></h4>'
                     +'<div><p class="note"><a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a></p>'
                        +'<div class="url text-success">'
                            +datosu[i].NAME_DOCUMENT+'<i class="fa fa-caret-down"></i></div>'
                        +'<p class="description">');
                var stri=datosu[i].SEARCH;
                var strarr=stri.split("=");
                var strvar=strarr[1];

                 var sea = strvar.split(",");
                for(j=0; j<sea.length;j++){
                    html+=html2+''+sea[j]+'<br>';
                }  

                html3=html+html2+'</p></div><hr>';    
            }
            $(".resulttrd").html(html3+'<hr>');   
        },'json');
    }

    $("#subserie").change(function(){
        if(!$("#subserie").val()){
            $("#typedocment").html('');
            $(".fields").html('');
        }
        else{
           getTypeDoc();
            historial("subserie",$("#subserie").val());
           historial("subserie",$("#subserie").val());
        }
    });

    var getTypeindex = function(){
        $(".resulttrd").html('');
         var html="";
         var htmll="";
        $.post('/search/getfields/','typedocment=' + $("#typedocment").val(),function(datoi){
            //$(".fields").html('<label for="exampleInputPassword1">Index</label>');7
            html='<script type="text/javascript">$(function () {$( "#datepicker6" ).datepicker({dateFormat: "yy-mm-dd"});});</script>';
            html=html+'<label></label> ';
            for(var k = 0; k < datoi.length; k++){
                htmld='';
               if(datoi[k].id_type==4){
                        html=html+'<section class="col col-3"><label class="input"><input type="text" id="datepicker6" class="form-control" placeholder="'+datoi[k].indexes+'" name="index_'+datoi[k].id_index+'"></label></section>';
                }
                else{
                    //$(".fields").append('<input type="text" class="form-control" placeholder="'+datoi[k].indexes+'">');
                html=html+'<section class="col col-3"><label class="input"><input type="text" class="form-control" placeholder="'+datoi[k].indexes+'" name="index_'+datoi[k].id_index+'"></label></section>';
                }
                
            }
            html=html+''
            $(".fields").html(html+'</form>');
            //$(".fields").html('<button type="button" class="btn btn-success">Success</button>');
            
        }, 'json');
        var html2="";
        var html3="";
        var html4="<div class='search-results clearfix'>";
        var j=0;
        $.post('/search/getSearchType/','serie=' + $("#serie").val()+'&subserie='+$("#subserie").val()+'&type='+$("#typedocment").val(),function(datot){
            for(var i = 0; i < datot.length; i++){
                html2+=('<h4><a href="/document/viewdocument/?hastdocument='+datot[i].ID_HASTDOCUMENT+'"><strong>'+datot[i].SERIE+' - '+datot[i].SUB_SERIE+' - '+datot[i].TYPEDOCUMENT+'</strong></a></h4>'
                    +'<div><p class="note"><a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>'
                            +'<a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a></p>'
                        +'<div class="url text-success">'
                            +datot[i].NAME_DOCUMENT+'<i class="fa fa-caret-down"></i></div>'
                        +'<p class="description">');
                var stri=datot[i].SEARCH;
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
        },'json');
    }

    $("#typedocment").change(function(){
        if(!$("#typedocment").val()){
            $(".fields").html('');
        }
        else{
           getTypeindex();
           historial("typedocument",$("#typedocment").val());
        }
    });
    
    /*$("#searchtrd").click(function(){
        var formulario = $("#formtrd").serializeArray();
        alert(formaulario);
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/search/getsearchtrd/",
            data: formulario,
        }).done(function(respuesta){
            $(".resulsearch").html(respuesta);
        });
    });*/


    //----------------------Valoration----------------------------------
    var getSubserietvd = function(){
        $.post('/search/getSubserietvd/','serietvd=' + $("#serietvd").val(),function(datos){
            $("#subserietvd").html('');
            $("#typedocmenttvd").html('');
             $(".fieldstvd").html('');
                $("#subserietvd").append('<option value=""> --Select--</option>');
            for(var i = 0; i < datos.length; i++){
                $("#subserietvd").append('<option value="' + datos[i].id_valoration + '">' + datos[i].valoration + '</option>');
            }
            
        }, 'json');
    }

   $("#serietvd").change(function(){
        if(!$("#serietvd").val()){
            $("#subserietvd").html('');
            $(".fieldstvd").html('');
        }
        else{
           getSubserietvd(); 
           historial("serie",$("#serietvd").val());
        }
    });

    var getTypeDoctvd = function(){

        $.post('/search/getTypeDoctvd/','subserietvd=' + $("#subserietvd").val(),function(datoss){
            $("#typedocmenttvd").html('');
             $(".fieldstvd").html('');
                $("#typedocmenttvd").append('<option value=""> --Select--</option>');
            for(var j = 0; j < datoss.length; j++){
                $("#typedocmenttvd").append('<option value="' + datoss[j].id_typedoc + '">' + datoss[j].documenttype + '</option>');
            }
            
        }, 'json');
    }

    $("#subserietvd").change(function(){
        if(!$("#subserietvd").val()){
            $("#typedocmenttvd").html('');
            $(".fieldstvd").html('');
        }
        else{
           getTypeDoctvd(); 
           historial("subserie",$("#subserietvd").val());
        }
    });

    var getTypeindextvd = function(){
         var html="";
         var htmll="";
        $.post('/search/getfieldstvd/','typedocmenttvd=' + $("#typedocmenttvd").val(),function(datoi){
            //$(".fields").html('<label for="exampleInputPassword1">Index</label>');7
            html='<script type="text/javascript">$(function () {$( "#datepicker6" ).datepicker({dateFormat: "yy-mm-dd"});});</script>';
            html=html+'<label></label> ';
            for(var k = 0; k < datoi.length; k++){
                htmld='';
               if(datoi[k].id_type==4){
                        html=html+'<section class="col col-3"><label class="input"><input type="text" id="datepicker6" class="form-control" placeholder="'+datoi[k].indexes+'" name="index'+datoi[k].id_index+'"></label></section>';
                }
                else{
                    //$(".fields").append('<input type="text" class="form-control" placeholder="'+datoi[k].indexes+'">');
                html=html+'<section class="col col-3"><label class="input"><input type="text" class="form-control" placeholder="'+datoi[k].indexes+'" name="index'+datoi[k].id_index+'"></label></section>';
                }
                
            }
            html=html+''
            $(".fieldstvd").html(html);
            //$(".fields").html('<button type="button" class="btn btn-success">Success</button>');
            
        }, 'json');
    }

    $("#typedocmenttvd").change(function(){
        if(!$("#typedocmenttvd").val()){
            $(".fieldstvd").html('');
        }
        else{
           getTypeindextvd(); 
        }
    });

});

var nhistorial=new Array();
var vhistorial=new Array();
var h = 0;
var urlt = "";


function historial(y,z) 
{
    var can = 0;
    for(var i = 0; i < nhistorial.length; i++){
        if (nhistorial[i] == z) {
            if (val == "") {
                nhistorial.splice(i, 1);
                vhistorial.splice(i, 1);
            } else {
                vhistorial[i] = y;
                i = nhistorial.length;
            }
            can = 1;
        }
    }
    if (can == 0) {
        // Agrega
        if (z != "") {
            nhistorial[nhistorial.length] = y;
            vhistorial[vhistorial.length] = z;
        }
    }
    /*var url = '/search/searchTrd/'; 
    //var pars = (+ y + "&z=" + z);
    var pars =("#"+y+"="+z);
    location.href = url+pars;*/

    var url = "";
    for ( var i = 0; i < nhistorial.length; i++) {
        url = url + nhistorial[i] + "=" + vhistorial[i] + "&";
    }
    if (h == 0)
        location.href = '#' + url;
    urlt = '#' + url;
}

