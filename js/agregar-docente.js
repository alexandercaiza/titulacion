eventoFormulario();

function eventoFormulario() {
    document.querySelector("#quickForm").addEventListener("submit", validar);

}

function validar(e) {
    e.preventDefault();
    var nombre = document.querySelector('#nombres').value,
        apellido = document.querySelector('#apellidos').value,
        cedula = document.querySelector('#cedula').value,
        correo = document.querySelector('#correo').value;
    contraseña = document.querySelector('#contraseña').value,
        instituto = document.querySelector('#instituto').value,
        carrera = document.querySelector('#carrera').value;
    puesto = document.querySelector('#puesto').value,
        observacion = document.querySelector('#observacion').value;

    /* console.log(nombre);
        console.log(apellido); 
        console.log(numero);
        console.log(direccion);
        console.log(sugerencia);
        console.log(correo);
    */
    if (nombre === '' || apellido === '' || correo === '' || cedula === '' || contraseña === '' || instituto === '' || carrera === '' || puesto === '' || observacion === '') {

        swal({
            type: 'error',
            title: 'Error!',
            text: ' Campos son obligatorios!'
        });
        document.querySelector("#formulario").reset();
    } else {
        if (correo.indexOf("@") > -1) {
            //console.log("registro exitoso");
            var xhr = new XMLHttpRequest();
            var cedulaDos = cedula.toString();

            var datos = new FormData();
            datos.append('nombre', nombre);
            datos.append('apellido', apellido);
            datos.append('correo', correo);
            datos.append('cedula', cedulaDos);
            datos.append('contraseña', contraseña);
            datos.append('instituto', instituto);
            datos.append('carrera', carrera);
            datos.append('puesto', puesto);
            datos.append('observacion', observacion);



            xhr.open('POST', '../inc/modelo/agregar-docente.php', true);


            xhr.onload = function() {
                if (this.status === 200) {
                    /*  swal({
                          type: 'success',
                          title: 'Sugerencia',
                          text: 'Se envio su sugerencia '
                      });*/

                    var respuesta = JSON.parse(xhr.responseText);
                    //console.log(respuesta);


                     if(resultado === 'correcto') {
                          swal({
                              title: 'Agregado correctamente',
                              text: '',
                              type: 'success'
                          })
      
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





        } else {
            //console.log("debe tener colocar un correo valido");
            swal({
                    title: 'Error',
                    text: 'Debe ingresar un correo válido',
                    type: 'error'
                })
                //   document.querySelector("#quickForm").reset();

        }
    }


    document.querySelector("#quickForm").reset();

} // cierre de la funcion