<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Reportes</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="text-center">POSTULANTES FALTANTES AL SEGUNDO PARCIAL CARRERA DE ENFERMERIA, NUTRICION, TECNOLOGIA MEDICA, PROGRAMA DE TERAPIA OCUPACIONAL Y FONOAUDIOLOGIA</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>CARNET</th>
                            <th>PATERNO</th>
                            <th>MATERNO</th>
                            <th>NOMBRE</th>
                            <th>EDIFICIO</th>
                            <th>PISO</th>
                            <th>AULA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faltantes as $faltante)
                        <tr>
                            <td>{{$faltante->CARNET}}</td>
                            <td>{{$faltante->PATERNO}}</td>
                            <td>{{$faltante->MATERNO}}</td>
                            <td>{{$faltante->NOMBRE}}</td>
                            <td>{{$faltante->BLOQUE}}</td>
                            <td>{{$faltante->PISO}}</td>
                            <td>{{$faltante->AULA}}</td>
                        </tr>
                        @endforeach
            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>