<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @php
        //header("Refresh: 0.5; URL='/'");
    @endphp

    <div class="container-fluid">
        <div class="row">

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card align-items-center">
                    <!--
                    <img src="{{asset('img/medicina.jpg')}}" width="50px" height="50px" alt="">
                    -->
                    <div class="card-body">
                      <h1 class="card-title text-center">
                        {{$cont_cv}}
                      </h1>
                      <p class="card-text text-center">INGRESO</p>
                     <div class="container">
                        <div class="row align-items-center justify-content-center">
                            @php
                            $total = 930;
                            $falta = $total - $cont_cv;
                            @endphp
                            <div class="col">
                                Total:
                                <div class="alert alert-warning" role="alert">
                                    <b>930</b>
                                </div>
                            </div>
                            <div class="col">
                                Falta:
                                <div class="alert alert-danger" role="alert">
                                    <b>{{$falta}}</b>
                                </div>
                            </div>
                            <div class="col">
                                <a name="" id="" class="btn btn-primary " href="{{route('reportes_cv')}}" role="button">Reporte Faltantes</a>
                            </div>
                        </div>
                     </div>
                      </div>
                    </div>
            </div>
            <div class="col-md-2">
                <div class="card border-danger">
                    @if ($cincuentaicuatro == 290)
                    <div class="card-header bg-danger border-danger text-center">
                        <b>AUDITORIO</b> <br> PISO 4 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-danger text-center">
                        <b>AUDITORIO</b> <br> PISO 4 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>FELICIDAD RIOS CALLEJAS - MARIA DEL CARMEN AÑAGUAYA MAMANI - LUCIA JULIETA ABUNA SALCEDO</p>
                        <span class="badge bg-secondary">290</span>
                        <span class="badge bg-danger">{{$cincuentaicuatro}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-danger text-center">
                        <b>ENFERMERIA</b>
                    </div>
                  </div>  
            </div>
            <div class="col-md-2">
                <div class="card border-danger">
                    @if ($cincuentaiseis == 81)
                    <div class="card-header bg-danger border-danger text-center">
                        <b>SALA DE CONFERENCIA</b> <br> PISO 5 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-danger text-center">
                        <b>SALA DE CONFERENCIA</b> <br> PISO 5 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>ROSMERY CHAVEZ RIOS - ALBINA PALMIRA MALDONADO CHACON - FREDDY TANCARA VARGAS</p>
                        <span class="badge bg-secondary">81</span>
                        <span class="badge bg-danger">{{$cincuentaiseis}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-danger text-center">
                        <b>ENFERMERIA</b>
                    </div>
                  </div>  
            </div>


            <div class="col-md-2">
                <div class="card border-warning">
                    @if ($cuarentaicinco == 99)
                    <div class="card-header bg-warning border-warning text-center">
                        <b>AULA A</b> <br> PISO 1 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-warning text-center">
                        <b>AULA A</b> <br> PISO 1 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>EUNICE ZARATE DE CALDERON - ERICK OMAR PAYE HUANCA - MARIA GLADYS ESPEJO CHOQUETARQUI</p>
                        <span class="badge bg-secondary">99</span>
                        <span class="badge bg-warning">{{$cuarentaicinco}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-warning text-center">
                        <b>NUTRICION Y DIETETICA</b>
                    </div>
                  </div>  
            </div>

            <div class="col-md-2">
                <div class="card border-success">
                    @if ($cuarentaisiete == 53)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA E</b> <br> PISO 2 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA E</b> <br> PISO 2 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>TANIA MILENKA PATIÑO SANCHES - SILVIA EUGENIA MITA KILLE - PATRICIA XIMENA CLAROS PIZARRO</p>
                        <span class="badge bg-secondary">53</span>
                        <span class="badge bg-success">{{$cuarentaisiete}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-success text-center">
                        <b>PROGRAMA DE TERAPIA OCUPACIONAL Y FONOAUDIOLOGIA</b>
                    </div>
                  </div>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-2">
                <div class="card border-primary">
                    @if ($cuarentaiocho == 75)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA B</b> <br> PISO 2 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA B</b> <br> PISO 2 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MARLENE ISABEL SUXO TEJADA - EDGAR CHAMBI GUTIERREZ - TATIANA ESCOBAR</p>
                        <span class="badge bg-secondary">75</span>
                        <span class="badge bg-primary">{{$cuarentaiocho}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>LABORATORIO CLINICO</b>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-2">
                <div class="card border-primary">
                    @if ($treintainueve == 40)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA B</b> <br> PLANTA BAJA <br> EDIFICIO: MORFOLOGICAS
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA B</b> <br> PLANTA BAJA <br> EDIFICIO: MORFOLOGICAS
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>GREGORIO MARISCAL QUENTA - ANGELA MARIANA QUIROZ PADILLA</p>
                        <span class="badge bg-secondary">40</span>
                        <span class="badge bg-primary">{{$treintainueve}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>BIOIMAGENOLOGIA</b>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-2">
                <div class="card border-primary">
                    @if ($treintaiocho == 60)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AUDITORIUM B</b> <br> PISO 1 <br> EDIFICIO: MORFOLOGICAS
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AUDITORIUM B</b> <br> PISO 1 <br> EDIFICIO: MORFOLOGICAS
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>GABRIELA TERRAZAS CHAVEZ - LUIS SILVESTRE GONZALO QUIROGA MEDIETA</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-primary">{{$treintaiocho}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>BIOIMAGENOLOGIA</b>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-2">
                <div class="card border-primary">
                    @if ($cincuenta == 49)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA L</b> <br> PISO 3 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA L</b> <br> PISO 3 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JUANA IRIS FERNANDEZ TIRADO - ROSARIO CAMACHO MENESES</p>
                        <span class="badge bg-secondary">49</span>
                        <span class="badge bg-primary">{{$cincuenta}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>BIOIMAGENOLOGIA</b>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-2">
                <div class="card border-primary">
                    @if ($cincuentaiuno == 63)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA I</b> <br> PISO 3 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA I</b> <br> PISO 3 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>EMILIO FERNANDO FLORES ALCALA - SOLEDAD CALLE VELASCO</p>
                        <span class="badge bg-secondary">63</span>
                        <span class="badge bg-primary">{{$cincuentaiuno}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>FISIOTERAPIA Y KINESIOLOGIA</b>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-2">
                <div class="card border-primary">
                    @if ($cincuentaidos == 60)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA K</b> <br> PISO 3 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA K</b> <br> PISO 3 <br> EDIFICIO: TECNOLOGIA MEDICA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>PAMELA ALISON CASTILLO VEGA - JORGE WILSON SALASAR CONDE</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-primary">{{$cincuentaidos}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>FISIOTERAPIA Y KINESIOLOGIA</b>
                    </div>
                  </div>   
            </div>
            
            <div class="col-sm-2 m-1">
                <div class="card border-primary">
                    @if ($treintaisiete == 60)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AUDITORIUM A</b> <br> PISO 1 <br> EDIFICIO: MORFOLOGICAS
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AUDITORIUM A</b> <br> PISO 1 <br> EDIFICIO: MORFOLOGICAS
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MEREIDA MACIEL RIOS ORDOÑEZ - VANNIA MELISSA ESPINOZA PINTO - MARISOL SHIRLEY COLQUE TALI</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-primary">{{$treintaisiete}}</span>
                    </div>
                    <div class="card-footer bg-transparent border-primary text-center">
                        <b>TECNOLOGIA MEDICA </b> <br>
                        <b>FISIOTERAPIA Y KINESIOLOGIA</b>
                    </div>
                  </div>   
            </div>
        </div>

    </div>
</body>
</html>