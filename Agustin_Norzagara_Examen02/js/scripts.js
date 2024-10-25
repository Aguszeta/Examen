function mostrarModal(anio, esBisiesto) {
    if (esBisiesto) {
        document.getElementById('anioBisiesto').textContent = anio;
        var modalBisiesto = new bootstrap.Modal(document.getElementById('modalBisiesto'));
        modalBisiesto.show();
    } else {
        document.getElementById('anioParImpar').textContent = anio;
        document.getElementById('tipoParImpar').textContent = (anio % 2 === 0) ? 'par' : 'impar';
        var modalParImpar = new bootstrap.Modal(document.getElementById('modalParImpar'));
        modalParImpar.show();
    }
}
