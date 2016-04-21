$(document).ready(function(){
   
    $('#form1').validate({
        rules:{
            group:{
                required: true
            }
        },
        messages:{
            group: {
                required: "Enter the Group"
            }
        }
    });

    //$(".selected").multiselect();
});