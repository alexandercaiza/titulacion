eventListeners();


function eventListeners() {
    document.querySelector('#quickForm').addEventListener('submit', validarRegistro);

}


function validarRegistro(e) {
    e.preventDefault();

    var fecha = document.querySelector('#fecha').value,
        cliente = document.querySelector('#cliente').value;
    //  tipo = document.querySelector('#tipo').value;

    if (fecha === '' || cliente === '') {
        // la validación falló
        swal({
            type: 'error',
            title: 'Error!',
            text: 'Ambos campos son obligatorios!'
        });
    } else {
        // Ambos campos son correctos, mandar ejecutar Ajax
        // datos que se envian al servidor
        var xhr = new XMLHttpRequest();
        var datos = new FormData();
        datos.append('fecha', fecha);
        datos.append('cliente', cliente);
        // datos.append('accion', tipo);

        // crear el llamado a ajax


        // abrir la conexión.
        //console.log(fecha);
        //console.log(cliente);
        xhr.open('POST', '../inc/modelo/asistencia.php', true);

        // retorno de datos
        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                //console.log(respuesta);
                var resultado = respuesta.respuesta;

                //console.log(respuesta);
                if (resultado === 'existe fecha') {
                    swal({
                        title: 'Error',
                        text: 'Usted ya registró su asistencia',
                        type: 'error'
                    })

                } else if (resultado === 'fecha registrada') {
                    swal({
                        type: 'success',
                        title: 'Registro su asistencia',
                        text: ''
                    });

                } else if (resultado === 'incorrecto') {
                    swal({
                        title: 'Error',
                        text: 'Hubo un error',
                        type: 'error'
                    })

                } else if (resultado === 'no es posible') {
                    swal({
                        title: 'Error',
                        text: 'Hoy no debe registrar su asistencia',
                        type: 'error'
                    })

                } else if (resultado === 'NO PUEDE INGRESAr' || resultado === 'docente no agrego hora') {
                    swal({
                        title: 'Error',
                        text: 'Administrador no agrega la hora de vacación',
                        type: 'error'
                    })

                }

                // termina las altertas 



            }
        }

        // Enviar la petición
        xhr.send(datos);


    }
}