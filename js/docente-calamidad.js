eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var fechaSolicitud = document.querySelector('#fecha-solicitud').value;
    var fechaInicio = document.querySelector('#fecha-inicio').value;
    var fechaFinal = document.querySelector('#fecha-final').value;
    var cliente = document.querySelector('#cliente').value;
    var link = document.querySelector('#link').value;


    /* console.log(nombre);
        console.log(apellido);
        console.log(numero);
        console.log(direccion);
        console.log(sugerencia);
        console.log(correo);
    */
    if (fechaSolicitud === '' || fechaInicio === '' || fechaFinal === '' || link === '') {

        swal({
            type: 'error',
            title: 'Error!',
            text: ' Campos son obligatorios!'
        });
        document.querySelector("#quickForm").reset();
    } else {
        //var cedulaDos = cedula.toString();

        var xhr = new XMLHttpRequest();
        var datos = new FormData();
        datos.append('fecha-solicitud', fechaSolicitud);
        datos.append('fecha-inicio', fechaInicio);
        datos.append('fecha-final', fechaFinal);
        datos.append('cliente', cliente);
        datos.append('link', link);
        xhr.open('POST', '../inc/modelo/modelo-calamidad-docente.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                /*  swal({
                      type: 'success',
                      title: 'Sugerencia',
                      text: 'Se envio su sugerencia '
                  });*/

                var respuesta = JSON.parse(xhr.responseText);
                var resultado = respuesta.respuesta;
                if(resultado =='correcto calamidad'){
                   swal({
                      type: 'success',
                      title: 'Solicitud enviada',
                      text: ''
                  });
                }
                else{
                   swal({
                      type: 'error',
                      title: 'Solicitud no enviada',
                      text: ''
                  });
                }


            }

        }


        xhr.send(datos);






    }


    document.querySelector("#quickForm").reset();

} // cierre de la funcion