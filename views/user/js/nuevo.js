$(document).ready(function(){
    $('#form1').validate({
        rules:{
            firstname:{
                required: true
            },
            lastname:{
                required: true    
            },
            login:{
                required: true,
                checkExists: true   
            },
            passwd:{
                required: true    
            },
            confirmpasswd:{
                required: true,
                equalTo : "#passwd"   
            },
            email:{
                required: true, 
            },
            rol:{
                required: true, 
            },
            status:{
                required: true, 
            }  

        },
        messages:{
            firstname: {
                required: "Enter the First Name"
            },
            lastname: {
                required: "Enter the Last Name"
            },
            login: {
                required: "Enter the login"
            },
            passwd: {
                required: "Enter the Password"
            },
            confirmpasswd: {
                required: "Enter the Confirm Password"
            },
            email: {
                required: "the email address is invalid"
            },
            rol: {
                required: "Enter the First Rol"
            },
            status: {
                required: "Enter the First Status"
            }            
        }
    });
});