$(document).ready(function(){

  $("form#formLogin").validate({
    rules :{
     username: {
      required:true,
      email:true
    },
    password: {
      required:true
    }
  },

  messages:{

    username:{

      required:"Es necesario ingresar un email , para completar el registro",
      email: "Por favor , Ingrese un email valido"
    },

    password :{

      required:"Es necesario que ingrese su contraseña"
    }

  }

});

})
