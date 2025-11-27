<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6h0+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <title>Libreria Mendez</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                
                <h1 class="mb-3">Entrega de libros</h1>
                
                
                <ul>
                    <li>Multa base: $5 por libro </li>
                    <li>Recargo: $2 por día de retraso por libro</li>
                    <li>Descuento del 20% al regresar todos los libros el mismo día. </li>
                </ul>
                
                <hr class="mb-4">

                <form action="proceso.php" method="POST">
                    
                    <div class="mb-3">
                        <label for="libros" class="form-label">Ingresa la cantidad de libros retrasados</label>
                        <input type="number" class="form-control" id="libros" name="libros" required>
                    </div>

                    <div class="mb-3">
                        <label for="retraso" class="form-label">Dias de retraso</label>
                        <input type="number" class="form-control" id="retraso" name="retraso" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-block">Entregaraa todos los libros hoy</label>
                        <div class="btn-group w-100" role="group" aria-label="Opciones de entrega">
                            <input type="radio" class="btn-check" name="seleccion" id="si" value="SI" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" for="si">SI</label>
                        
                            <input type="radio" class="btn-check" name="seleccion" id="no" value="NO" autocomplete="off">
                            <label class="btn btn-outline-primary" for="no">NO</label>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100">Capturar</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>