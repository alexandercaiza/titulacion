eventListeners();

function eventListeners() {
    document.querySelector('#login').addEventListener('submit', validarRegistro);
}


function validarRegistro(e) {
    e.preventDefault();

    var cedula = document.querySelector('#cedula').value,
        contraseña = document.querySelector('#contraseña').value;
    //  tipo = document.querySelector('#tipo').value;

    if (cedula === '' || contraseña === '') {
        // la validación falló
        swal({
            type: 'error',
            title: 'Error!',
            text: 'Ambos campos son obligatorios!'
        });
    } else {
        // Ambos campos son correctos, mandar ejecutar Ajax
        var cedulaDos = cedula.toString();
        // datos que se envian al servidor
        var xhr = new XMLHttpRequest();
        var datos = new FormData();
        datos.append('cedula', cedulaDos);
        datos.append('contraseña', contraseña);
        // datos.append('accion', tipo);

        // crear el llamado a ajax


        // abrir la conexión.
        xhr.open('POST', 'inc/modelo/login.php', true);

        // retorno de datos
        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);

                console.log(respuesta);
                var valor = respuesta.id;
                var ayuda = (Math.random() * 1000) + 34535;
                var clienp = valor + 102020;
                var cuanto = respuesta.tipo + 3435;
                if (respuesta.respuesta === 'correcto') {
                    // si es un nuevo usuario
                    if (respuesta.tipo === 1) {
                        window.location.href = 'inicio-administrador.php?drfthu_45PIO=' + clienp + '&frft=' + ayuda + '&cuanto=' + cuanto;

                    } else if (respuesta.tipo === 2) {
                        window.location.href = 'inicio-docente.php?fephylfr_45O=' + clienp + '&fthil=' + ayuda + '&cuanto=' + cuanto;

                    }
                } else {
                    // Hubo un error
                    swal({
                        title: 'Error',
                        text: 'Hubo un error',
                        type: 'error'
                    })
                    document.querySelector('#login').reset();
                }



            }
        }

        // Enviar la petición
        xhr.send(datos);

    }
}