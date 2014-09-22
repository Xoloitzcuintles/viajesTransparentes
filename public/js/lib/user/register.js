$(document).ready(function(){
   $("#registerButton").click(function(){
        if($("#username").val() == ""){
            alert("Debe ingresar un usuario válido");
            return false;
        }

        if($("#password").val() != "" && $("#password").val() == $("#repeatPassword").val()){
            $("#registerForm").submit();
        } else {
            alert("Debe ingresar la misma contraseña")
            return false;
        }
        
   });
});