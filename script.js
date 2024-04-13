let contadores = {
    rojos: 0,
    verdes: 0,
    azules: 0,
};

function agregarColor() {
    const color = document.getElementById('colorInput').value.toLowerCase();
    if (contadores.hasOwnProperty(color)) {
        contadores[color]++;
        document.getElementById(color + 's').innerText = `Cantidad de ${capitalize(color)}s: ${contadores[color]}`;
    }
}

function capitalize(s) {
    return s.charAt(0).toUpperCase() + s.slice(1);
}

document.getElementById('guardar').addEventListener('click', function() {
    fetch('guardar_datos.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(contadores),
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch((error) => {
        console.error('Error:', error);
    });
});
