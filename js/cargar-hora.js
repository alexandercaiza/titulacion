eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var hora = document.querySelector('#hora').value;
    hora = hora.toString();
    if (hora.includes(".")) {

        //console.log("tiene un punto, toca cambiarlo")
    } else if (hora.includes(",")) {
        //console.log(" tiene una coma, listo para insertar en la base");


    } else {

        //console.log(" le falta un valor decimal a su hora que no ");
    }


    //console.log("El numero total es :" + hora.length);




    if (hora === '') {

        swal({
            type: 'error',
            title: 'Error!',
            text: ' Debe llenar el campo, por favor'
        });
    } else {
        if (hora.includes(".")) {
            swal({
                type: 'error',
                title: 'Error!',
                text: ' La hora no tiene el formato indicado'
            });
        } else {
            if (hora.length > 3) {
                swal({
                    type: 'error',
                    title: 'Error!',
                    text: ' La hora no tiene el formato indicado'
                });
            } else {
                var horaNueva = hora.replace(',', '');

                //console.log("La hora a pasar en la base es " + horaNueva);
                var xhr = new XMLHttpRequest();
                var datos = new FormData();
                datos.append('hora', horaNueva);
                xhr.open('POST', '../inc/modelo/modelo-cargar-hora.php', true);
                xhr.onload = function() {
                    if (this.status === 200) {
                        /*  swal({
                              type: 'success',
                              title: 'Sugerencia',
                              text: 'Se envio su sugerencia '
                          });*/

                        var respuesta = JSON.parse(xhr.responseText);
                        //console.log(respuesta);
                        if (respuesta.respuesta == 'correcto') {
                            swal({
                                type: 'success',
                                title: 'Hora de vacación',
                                text: 'Ingresó con exito la hora '
                            });

                        } else if (respuesta.respuesta == 'no') {
                            swal({
                                type: 'error',
                                title: 'No es válido',
                                text: 'Permido ingresar solo una vez '
                            });


                        } else if (respuesta.respuesta == 'incorrecto') {
                            swal({
                                type: 'error',
                                title: 'No en la base  ',
                                text: 'No se inserto la hora en la base '
                            });


                        }

                    }

                }

                xhr.send(datos);


            }

        }

    }



    document.querySelector("#quickForm").reset();

} // cierre de la funcion