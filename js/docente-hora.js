eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var fechaSolicitud = document.querySelector('#fecha-solicitud').value;
    var horaInicio = document.querySelector('#hora-inicio').value;
    var horaFinal = document.querySelector('#hora-final').value;
    var concepto = document.querySelector('#concepto').value;
    var cliente = document.querySelector('#cliente').value;
    var link = document.querySelector('#link').value;
    var horaInicioCompleta = fechaSolicitud + ' ';
    horaInicioCompleta += horaInicio;
    var horaFinalCompleta = fechaSolicitud + ' ';
    horaFinalCompleta += horaFinal;


    /* console.log(nombre);
        console.log(apellido);
        console.log(numero);
        console.log(direccion);
        console.log(sugerencia);
        console.log(correo);
    */
    if (fechaSolicitud === '' || horaInicio === '' || horaFinal === '' || concepto === '' || cliente === '' || link === '') {

        swal({
            type: 'error',
            title: 'Error!',
            text: ' Campos son obligatorios!'
        });
        document.querySelector("#quickForm").reset();







    } else {
        //console.log(horaInicioCompleta);
        //console.log(horaFinalCompleta);
        horaInicioF = horaInicio.split(":");
        horaFinalF = horaFinal.split(":");
        horaInicioT = horaInicio.split(" ");
        horaFinalT = horaFinal.split(" ");
        horaInicioParteNumero = horaInicioF[0];
        horaFinalParteNumero = horaFinalF[0];
        horaInicioParteLetra = horaInicioT[1];
        horaFinalParteLetra = horaFinalT[1];
        //console.log(horaInicioF);
        //console.log(horaFinalF);
        //console.log(horaInicioT);
        //console.log(horaFinalT);
        /////////////////////////////////////
        //console.log(horaInicioParteNumero);
        //console.log(horaFinalParteNumero);
        //console.log(horaInicioParteLetra);
        //console.log(horaFinalParteLetra);
        //////////////////////
        //var cedulaDos = cedula.toString();


        var xhr = new XMLHttpRequest();
        var datos = new FormData();
        datos.append('fecha-solicitud', fechaSolicitud);
        datos.append('hora-inicio', horaInicio);
        datos.append('hora-final', horaFinal);
        datos.append('concepto', concepto);
        datos.append('cliente', cliente);
        datos.append('hora-inicio-num', horaInicioParteNumero);
        datos.append('hora-final-num', horaFinalParteNumero);
        datos.append('hora-inicio-letra', horaInicioParteLetra);
        datos.append('hora-final-letra', horaFinalParteLetra);
        datos.append('link', link);
        datos.append('hora-inicio-completa', horaInicioCompleta);
        datos.append('hora-final-completa', horaFinalCompleta);
        xhr.open('POST', '../inc/modelo/modelo-hora-docente.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                /*  swal({
                      type: 'success',
                      title: 'Sugerencia',
                      text: 'Se envio su sugerencia '
                  });*/

                var respuesta = JSON.parse(xhr.responseText);
                var resultado = respuesta.respuesta;
                //console.log(respuesta);
                  if(resultado == 'correcto'){
                     swal({
                      type: 'success',
                      title: 'Solicitus enviada',
                      text: ' '
                      });
                  }
                  else{
                     swal({
                      type: 'error',
                      title: 'Solicitud no enviada',
                      text: ' '
                       });
                  }

            }





        }


        xhr.send(datos);





    }


    document.querySelector("#quickForm").reset();








}