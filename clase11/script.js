$(document).ready(function(){
  console.log('Jquery RUN');
  $(".error-nombre").hide();
  $(".error-email").hide();
  $(".error-mensaje").hide();

  $('#formulario-contacto').submit(function(e){

    var validado = true;
    // Nombre
    var id_nombre = $('#id-nombre').val();
    console.log(id_nombre);

    if(id_nombre.length < 1){
      $(".error-nombre").show();
      validado = false;
    }

    // Email
    var id_email = $('#id-email').val();
    console.log(id_email);
    if(id_email.length < 1){
      $(".error-email").show();
      validado = false;
    }

    // Mensaje
    var id_mensaje = $('#id-mensaje').val();
    console.log(id_mensaje);
    if(id_mensaje.length < 1){
      $(".error-mensaje").show();
      validado = false;
    }

    if(validado){
      return;
    }else{
      e.preventDefault();
    }

  })
});