$(document).ready(function() {
	pageSetUp();

     $( "#datepicker6" ).datepicker({dateFormat: 'yy-mm-dd'});
     $( "#datepicker2" ).datepicker({dateFormat: 'yy-mm-dd'});

	var getSubserie = function(){
        $.post('/search/getSubserie/','serie=' + $("#serie").val(),function(datos){
            $("#subserie").html('');
            $("#typedocment").html('');
             $(".fields").html('');
            	$("#subserie").append('<option value=""> --SubSerie--</option>');
            for(var i = 0; i < datos.length; i++){
                $("#subserie").append('<option value="' + datos[i].id_retention + '">' + datos[i].retention + '</option>');
            }
            
        }, 'json');
    }

    $("#serie").change(function(){
        if(!$("#serie").val()){
            $("#subserie").html('');
            $(".fields").html('');
        }
        else{
           getSubserie(); 
        }
    });

    var getTypeDoc = function(){

        $.post('/search/getTypeDoc/','subserie=' + $("#subserie").val(),function(datoss){
            $("#typedocment").html('');
             $(".fields").html('');
            	$("#typedocment").append('<option value=""> --Type Document--</option>');
            for(var j = 0; j < datoss.length; j++){
                $("#typedocment").append('<option value="' + datoss[j].id_typedoc + '">' + datoss[j].documenttype + '</option>');
            }
            
        }, 'json');
    }

    $("#subserie").change(function(){
        if(!$("#subserie").val()){
            $("#typedocment").html('');
            $(".fields").html('');
        }
        else{
           getTypeDoc(); 
        }
    });

    var getTypeindex = function(){
         var html="";
         var htmll="";
        $.post('/search/getfields/','typedocment=' + $("#typedocment").val(),function(datoi){
            //$(".fields").html('<label for="exampleInputPassword1">Index</label>');7
            html='<script type="text/javascript">$(function () {$( "#datepicker6" ).datepicker({dateFormat: "yy-mm-dd"});});</script>';
            html=html+'<label for="inputEmail3" ">Index:</label><div"> ';
            for(var k = 0; k < datoi.length; k++){
                htmld='';
               if(datoi[k].id_type==4){
                        html=html+'<div class=""><input type="text" id="datepicker6" class="form-control" placeholder="'+datoi[k].indexes+'" name="index_'+datoi[k].id_index+'"></div>';
                }
                else{
                    //$(".fields").append('<input type="text" class="form-control" placeholder="'+datoi[k].indexes+'">');
                html=html+'<div class=""><input type="text" class="form-control" placeholder="'+datoi[k].indexes+'" name="index_'+datoi[k].id_index+'"></div>';
                }
                
            }
            html=html+''
            $(".fields").html(html);
            //$(".fields").html('<button type="button" class="btn btn-success">Success</button>');
            
        }, 'json');
    }

    $("#typedocment").change(function(){
        if(!$("#typedocment").val()){
            $(".fields").html('');
        }
        else{
           getTypeindex(); 
        }
    });


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
        }
    });

    var getTypeindextvd = function(){
         var html="";
         var htmll="";
        $.post('/search/getfieldstvd/','typedocmenttvd=' + $("#typedocmenttvd").val(),function(datoi){
            //$(".fields").html('<label for="exampleInputPassword1">Index</label>');7
            html='<script type="text/javascript">$(function () {$( "#datepicker2" ).datepicker({dateFormat: "yy-mm-dd"});});</script>';
            html=html+'<label for="inputEmail3" class="col-sm-2 control-label">Index:</label><div class="col-lg-9 "> ';
            for(var k = 0; k < datoi.length; k++){
                htmld='';
               if(datoi[k].id_type==4){
                        html=html+'<div class="col-xs-3"><input type="text" id="datepicker2" class="form-control" placeholder="'+datoi[k].indexes+'" name="index_'+datoi[k].id_index+'"></div>';
                }
                else{
                    //$(".fields").append('<input type="text" class="form-control" placeholder="'+datoi[k].indexes+'">');
                html=html+'<div class="col-xs-3"><input type="text" class="form-control" placeholder="'+datoi[k].indexes+'" name="index_'+datoi[k].id_index+'"></div>';
                }
                
            }
            html=html+'<div class="col-xs-3"><button type="button" class="btn btn-success "><span class="fa fa-search"></span>Search</button></div>'
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

    $('input[name="radiorecord"]').click(function(){
		if ($(this).val()=="1"){
			$("#serie").val("");
            $('#idrecord').attr('readonly', true);
            $.post('/record/newidrecord/',function(data){
                $('#idrecord').val(data);
            });
            $('#recordname').attr('readonly', false);
		}else{
			alert("funcione pues");
			$("#idrecord").val("");
            $('#idrecord').attr('readonly', false);
            $('#recordname').attr('readonly', true);
			
		}
		
	});
});