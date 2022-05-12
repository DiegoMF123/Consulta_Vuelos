$(document).ready(function() {

    $('#Entrar').click(function() {

      var errores = '';

      // Validado Nombre ==============================
      if ($('#Usuario').val() == '') {
        errores += '<p>Seleccione un tipo de solicitante(REGRESE A LA PANTALLA DATOS NUEVA SOLICITUD)</p>';
        $('#Usuario').css("border-bottom-color", "#F14B4B")
      } else {
        $('#Usuario').css("border-bottom-color", "#d1d1d1")
      }

      if ($('#Password').val() == '') {
        errores += '<p>Ingrese un número de solicitud (REGRESE A LA PANTALLA DATOS NUEVA SOLICITUD)</p>';
        $('#Password').css("border-bottom-color", "#F14B4B")
      } else {
        $('#Password').css("border-bottom-color", "#d1d1d1")
      }


      // ENVIANDO MENSAJE ============================
      if (errores == '' == false) {
        var mensajeModal = '<div class="modal_wrap">' +
          '<div class="mensaje_modal">' +
          '<h3>Errores Detectados</h3>' +
          errores +
          '<span id="btnClose">Cerrar</span>' +
          '</div>' +
          '</div>'

        $('body').append(mensajeModal);
      }

      // CERRANDO MODAL ==============================
      $('#btnClose').click(function() {
        $('.modal_wrap').remove();
      });
    });

  });