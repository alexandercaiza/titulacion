eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var fecha = document.querySelector('#fecha').value;


    /* console.log(nombre);
        console.log(apellido);
        console.log(numero);
        console.log(direccion);
        console.log(sugerencia);
        console.log(correo);
    */
    if (fecha === '') {

        swal({
            type: 'error',
            title: 'Error!',
            text: ' Campos son obligatorios!'
        });
        document.querySelector("#quickForm").reset();
    } else {
        //var cedulaDos = cedula.toString();
        console.log("La fecha es " + fecha);
        var xhr = new XMLHttpRequest();
        var datos = new FormData();
        datos.append('fecha', fecha);
        xhr.open('POST', '../inc/modelo/restriccion-fecha.php', true);
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

                if (resultado === 'correcto') {
                    swal({
                        title: 'Fecha ingresada',
                        text: 'Usted registro una fecha con éxito',
                        type: 'success'
                    });




                } else if (resultado === 'no') {
                    swal({
                        type: 'error',
                        title: 'Usted ya registro esa fecha!',
                        text: 'Hubo un error!'
                    });


                } else {
                    // hubo un error
                    swal({
                        type: 'error',
                        title: 'Error!',
                        text: 'Hubo un error!'
                    })
                }
            }





        }


        xhr.send(datos);






    }


    document.querySelector("#quickForm").reset();

} // cierre de la funcion