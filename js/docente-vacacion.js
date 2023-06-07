eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var fechaSolicitud = document.querySelector('#fecha-solicitud').value;
    var cliente = document.querySelector('#cliente').value;



    /* console.log(nombre);
        console.log(apellido);
        console.log(numero);
        console.log(direccion);
        console.log(sugerencia);
        console.log(correo);
    */
    if (cliente === '') {

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
        datos.append('cliente', cliente);
        xhr.open('POST', '../inc/modelo/modelo-vacacion-docente.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                /*  swal({
                      type: 'success',
                      title: 'Sugerencia',
                      text: 'Se envio su sugerencia '
                  });*/

                var respuesta = JSON.parse(xhr.responseText);

                var resultado = respuesta.respuesta;



                if (resultado == 'tiene solicitud' || resultado == 'no vacacion') {
                    swal({
                        type: 'error',
                        title: 'Usted tiene vacación',
                        text: ''
                    });



                } else {
                    swal({
                        type: 'success',
                        title: 'Registró su vacación',
                        text: ''
                    });


                }




                //console.log(cliente);

               // console.log(respuesta);


            }





        }


        xhr.send(datos);






    }


    document.querySelector("#quickForm").reset();

} // cierre de la funcion