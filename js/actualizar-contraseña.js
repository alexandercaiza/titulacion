eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var password = document.querySelector('#password').value;
    var new_password = document.querySelector('#new_password').value;
    var cliente = document.querySelector('#cliente').value;
    if (password == '' && new_password == '') {

        swal({
            type: 'error',
            title: 'Error!',
            text: ' Debe llenar el campo, por favor'
        });
    } else {
        if (password === new_password) {
            //console.log("coinciden " + cliente);
            var xhr = new XMLHttpRequest();
            var datos = new FormData();
            datos.append('contraseña', password);
            datos.append('cliente', cliente);
            xhr.open('POST', '../inc/modelo/modelo-actualizar-contraseña.php', true);
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
                    // console.log(respuesta);
                    // var resultado = respuesta.respuesta
                    if (resultado === 'actualizado password') {
                        swal({
                            type: 'success',
                            title: 'Correcto',
                            text: 'Cambio su contraseña'
                        });

                    } else {
                        swal({
                            type: 'error',
                            title: 'Error!',
                            text: 'No cambio su contraseña'
                        });

                    }

                }

            }

            xhr.send(datos);


        } else {
            swal({
                type: 'error',
                title: 'Error!',
                text: ' Las contraseñas no coinciden'
            });

        }

    }



    document.querySelector("#quickForm").reset();

} // cierre de la funcion