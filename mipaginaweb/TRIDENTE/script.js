document.getElementById('formulario').addEventListener('submit', function(event) {
    // Evitar que el formulario se envíe automáticamente
    event.preventDefault();

    // Obtener los valores del formulario
    var jugador = document.getElementById('jugador').value;
    var jornada = document.getElementById('jornada').value;
    var minutos = document.getElementById('minutos').value;
    var goles = document.getElementById('goles').value;
    var tarjetas = document.getElementById('tarjetas').value;
    var titular = document.getElementById('titular').checked;
    var convocado = document.getElementById('convocado').checked;

    // Crear una nueva fila para los datos en la tabla del jugador
    var nuevaFila = document.createElement('tr');
    nuevaFila.innerHTML = `
        <td>${jornada}</td>
        <td>${minutos}</td>
        <td>${goles}</td>
        <td>${convocado ? 'Si' : 'No'}</td>
        <td>${titular ? 'Si' : 'No'}</td>
        <td>${tarjetas}</td>
    `;

    // Obtener la tabla del jugador correspondiente
    var tablaJugador = document.getElementById(jugador);

    // Agregar la nueva fila a la tabla
    tablaJugador.appendChild(nuevaFila);

    // Limpiar el formulario después de enviar los datos
    document.getElementById('formulario').reset();
});

