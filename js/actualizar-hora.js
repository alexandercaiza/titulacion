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
                xhr.open('POST', '../inc/modelo/modelo-actualizar-hora.php', true);
                xhr.onload = function() {
                    if (this.status === 200) {
                        /*  swal({
                              type: 'success',
                              title: 'Sugerencia',
                              text: 'Se envio su sugerencia '
                          });*/

                        var respuesta = JSON.parse(xhr.responseText);
                        //console.log(respuesta);
                        // console.log(respuesta);
                        var resultado = respuesta.respuesta;
                        if(resultado=='actualizado'){
                            swal({
                              type: 'success',
                              title: 'Actualizado Correctamente',
                              text: ''
                          });
                        }else{
                            swal({
                              type: 'error',
                              title: 'Hubo un error',
                              text: ''
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