$(document).ready(function() {
 
    $('#formulario-contacto').submit(function(e) {
      
      var id_nombre = $('#id-nombre').val();
      var id_email = $('#id-email').val();
      var id_mensaje = $('#id-mensaje').val();
   
      //$(".error").remove();

      var validado = true;
   
      if (id_nombre.length < 1) {
        $('#id-nombre').after('<span class="error">El nombre es requerido</span>');
        validado = false;
      }

      if (id_email.length < 1) {
        $('#id-email').after('<span class="error">El correo es requerido</span>');
        validado = false;
      }

      if (id_mensaje.length < 1) {
        $('#id-mensaje').after('<span class="error">El mensaje es requerido</span>');
        validado = false;
      }
      // Si el formulario es valido enviara el mensaje
      if(validado){
        return;
      }else{
        e.preventDefault();
      }

    });
   
  });