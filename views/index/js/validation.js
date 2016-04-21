$(document).ready(function(){
	$('#form1').validate({
        rules:{
            user:{
                required: true
            },
            passwd:{
                required: true
            }
        },
        messages:{
            user: {
                required: "Debe introducir el titulo del post"
            },
            passwd:{
                required: "Debe introducir el cuerpo del post"
            }
        }
    });
});