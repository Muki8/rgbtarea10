<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Colores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css"> <!-- Tu archivo de estilos personalizado -->
    <script src="script.js" defer></script> <!-- Tu archivo de scripts personalizado -->
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Contador de Colores</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <strong>Colores</strong>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Rojo
                                <span id="rojos" class="badge badge-primary badge-pill">0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Verde
                                <span id="verdes" class="badge badge-success badge-pill">0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Azul
                                <span id="azules" class="badge badge-info badge-pill">0</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="entrada" class="mb-4">
                    <input type="text" id="colorInput" class="form-control" placeholder="Escribe rojo, verde o azul">
                    <button onclick="agregarColor()" class="btn btn-primary mt-2">Agregar Color</button>
                </div>
                <button id="guardar" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</body>
</html>
