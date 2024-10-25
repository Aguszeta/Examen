<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Examen U2</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Lista de Años</h2>

        <div class="tabla-contenedor">
            <div class="table-grid">
                <?php
                $inicio = isset($_GET['inicio']) ? intval($_GET['inicio']) : 0;
                $fin = isset($_GET['fin']) ? intval($_GET['fin']) : 0;

                if ($inicio > 0 && $fin > 0 && $inicio <= $fin) {
                    for ($year = $inicio; $year <= $fin; $year++) {
                        $esBisiesto = ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
                        $class = $esBisiesto ? 'bisiesto' : 'no-bisiesto';
                        echo "<div class='table-grid-item $class' onclick='mostrarModal($year, $esBisiesto)'>$year</div>";
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert">Rango de años no válido.</div>';
                }
                ?>
            </div>
        </div>

        <p class="note-text mt-3"><strong>NOTA:</strong> Puede hacer clic en los años resaltados para ver información sobre los años bisiestos.</p>

        <div class="modal fade" id="modalBisiesto" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">¿Qué es un Año Bisiesto?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Un año bisiesto ocurre cada cuatro años. Se considera bisiesto un año cuando:</p>
                        <ul>
                            <li>Es divisible entre 4.</li>
                            <li>No es divisible entre 100, a menos que también sea divisible entre 400.</li>
                        </ul>
                        <p>El año <span id="anioBisiesto"></span> es bisiesto y tiene 366 días.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalParImpar" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Año Par o Impar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>El año <span id="anioParImpar"></span> es un año <span id="tipoParImpar"></span>.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
