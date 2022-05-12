$(document).ready(function(){

      $('#btnSend').click(function(){

          var errores = '';

          // Validado Codigo de vuelo ==============================
          if( $('#codigoVuelo').val() == '' ){
              errores += '<p>Ingrese un código de vuelo</p>';
              $('#codigoVuelo').css("border-bottom-color", "#F14B4B")
          } else{
              $('#codigoVuelo').css("border-bottom-color", "#d1d1d1")
          }


          // ENVIANDO MENSAJE ============================
          if( errores == '' == false){
              var mensajeModal = '<div class="modal_wrap">'+
                                      '<div class="mensaje_modal">'+
                                          '<h3>Errores encontrados</h3>'+
                                          errores+
                                          '<span id="btnClose">Cerrar</span>'+
                                      '</div>'+
                                  '</div>'

              $('body').append(mensajeModal);
          }
          // CERRANDO MODAL ==============================
          $('#btnClose').click(function(){
              $('.modal_wrap').remove();
          });
      });

  });
