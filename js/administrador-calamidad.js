horaTabla = document.querySelector('#example2 tbody');
clienp = document.querySelector('#cliente').value;
cuanto = document.querySelector('#tipo').value;

var ayuda = (Math.random() * 1000) + 34535;
eventListeners();

function eventListeners() {

    if (horaTabla) {
        horaTabla.addEventListener('click', actualizarHora);
    }


}

function actualizarHora(e) {
    if (e.target.parentElement.classList.contains('btn-aceptar')) {
        // tomar el ID
        const id = e.target.parentElement.getAttribute('data-id');
        const nom = e.target.parentElement.getAttribute('data-nom');

        // console.log(id);
        swal({
            title: "Acepta la solicitud de " + nom,
            text: '',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Acepta solicitud',
            cancelButtonText: 'Cancela'
        }).then((result) => {
            if (result.value) {

                var estado = 'aceptada';
                estado = estado.toString();


                var xhr = new XMLHttpRequest();
                var datos = new FormData();
                datos.append('id', id);
                datos.append('estado', estado);

                xhr.open('POST', '../inc/modelo/modelo-administrador-calamidad.php', true);
                xhr.onload = function() {
                    if (this.status === 200) {
                        /*  swal({
                              type: 'success',
                              title: 'Sugerencia',
                              text: 'Se envio su sugerencia '
                          });*/

                        var respuesta = JSON.parse(xhr.responseText);
                        console.log(respuesta);
                        // console.log(respuesta);
                        var resultado = respuesta.respuesta

                        if (resultado == 'solicitud aceptada') {

                            window.location.href = 'administrador-solicitud-calamidad.php?drfthu_45PIO=' + clienp + '&frft=' + ayuda + '&cuanto=' + cuanto;

                        }


                    }

                }

                xhr.send(datos);




            }

        })




    } //cierre del primer if 
    if (e.target.parentElement.classList.contains('btn-rechazar')) {
        // tomar el ID
        const id = e.target.parentElement.getAttribute('data-id');
        const nom = e.target.parentElement.getAttribute('data-nom');
        const total = e.target.parentElement.getAttribute('data-total');
        const cliente = e.target.parentElement.getAttribute('data-cliente');
        var estado = 'rechazada';

        // console.log(id);
        swal({
            title: "Rechaza la solicitud de " + nom,
            text: '',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Rechaza solicitud',
            cancelButtonText: 'Cancela'
        }).then((result) => {
            if (result.value) {
                /*
                 var estado = 'aceptada';
                 swal(
                     'Solicitud de horas',
                     'Aceptó la solicitud de ',
                     'success'
                 )
                 */



                var xhr = new XMLHttpRequest();
                var datos = new FormData();
                datos.append('id', id);
                datos.append('estado', estado);
                datos.append('total', total);
                datos.append('cliente', cliente);


                xhr.open('POST', '../inc/modelo/modelo-administrador-calamidad.php', true);
                xhr.onload = function() {
                    if (this.status === 200) {
                        /*  swal({
                              type: 'success',
                              title: 'Sugerencia',
                              text: 'Se envio su sugerencia '
                          });*/

                        var respuesta = xhr.responseText;
                        console.log(respuesta);
                        // console.log(respuesta);
                        // var resultado = respuesta.respuesta





                    }

                }

                xhr.send(datos);
                /*
                swal(
                    'Solicitud de horas',
                    'Rechazó la solicitud de ',
                    'success'
                )

*/


            }

        })



    } //cierre del primer if 
}