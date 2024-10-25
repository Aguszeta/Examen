<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen U2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Examen U2</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Seleccione el Rango de Años</h2>
        <form action="result.php" method="get">
            <div class="mb-3">
                <label for="inicio" class="form-label">Año de Inicio:</label>
                <input type="number" class="form-control" id="inicio" name="inicio" required>
            </div>
            <div class="mb-3">
                <label for="fin" class="form-label">Año Final:</label>
                <input type="number" class="form-control" id="fin" name="fin" required>
            </div>
            <button type="submit" class="btn btn-primary">Generar Lista</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

