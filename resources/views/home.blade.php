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

            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($uno == 150)
                    <div class="card-header bg-success border-success text-center">
                        <b>BIBLIOTECA</b><br>  PLANTA BAJA
                    </div>  
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>BIBLIOTECA</b><br>  PLANTA BAJA
                    </div>
                    @endif
                    <div class="card-body text-center ">
                        <p>MASIEL RIOS - TATIANA QUISPE</p>
                        <span class="badge bg-secondary">150</span>
                        <span class="badge bg-success">{{$uno}}</span>
                    </div>
                  </div>   
            </div>

            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($dos == 60)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA K1</b><br>  PISO 3
                    </div> 
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA K1</b><br>  PISO 3
                    </div>
                    @endif
                    <div class="card-body text-center ">
                        <p>INDIRA ALPARO HERRERA</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-success">{{$dos}}</span>
                    </div>
                  </div>   
            </div>

            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($tres == 60)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA K2</b><br>  PISO 3
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA K2</b><br>  PISO 3
                    </div>
                    @endif
                    <div class="card-body text-center ">
                        <p>SHIRLEY THATIANA NELIDA ESCOBAR FERRUFINO</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-success">{{$tres}}</span>
                    </div>
                  </div>   
            </div>

            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($cuatro == 114)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA L</b> <br> PISO 3
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA L</b> <br> PISO 3
                    </div>
                    @endif 
                    <div class="card-body text-center ">
                        <p>EMILIO FERNANDO FLORES ALCARA - GROVER COAQUIRA</p>
                        <span class="badge bg-secondary">114</span>
                        <span class="badge bg-success">{{$cuatro}}</span>
                    </div>
                  </div>   
            </div>

            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($cinco == 90)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA 404</b><br>  PISO 4
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA 404</b><br>  PISO 4
                    </div>
                    @endif 
                    <div class="card-body text-center ">
                        <p>EDGARD CHAMBI GUTIERREZ</p>
                        <span class="badge bg-secondary">90</span>
                        <span class="badge bg-success">{{$cinco}}</span>
                    </div>
                  </div>   
            </div>

            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($seis == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA 408</b> <br> PISO 4
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA 408</b> <br> PISO 4
                    </div>
                    @endif 
                    <div class="card-body text-center ">
                        <p>PATRICIA XIMENA CLAROS PIZARRO</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$seis}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($siete == 90)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 4
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 4
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JORGE WILSON SALAZAR CONDE</p>
                        <span class="badge bg-secondary">90</span>
                        <span class="badge bg-success">{{$siete}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($ocho == 100)
                    <div class="card-header bg-success border-success text-center">
                        <b>AUD. DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AUD. DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MARIA GLADYS ESPEJO CHOQUETARQUI - LOURDES MORALES</p>
                        <span class="badge bg-secondary">100</span>
                        <span class="badge bg-success">{{$ocho}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($nueve == 30)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA A DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA A DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>VITERMAN ALI ESPINOZA</p>
                        <span class="badge bg-secondary">30</span>
                        <span class="badge bg-success">{{$nueve}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($diez == 30)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA B DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA B DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>REYNALDO FROILAN SILVA CORINI</p>
                        <span class="badge bg-secondary">30</span>
                        <span class="badge bg-success">{{$diez}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($once == 30)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA C DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA C DE HISTOLOGIA</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>EVELYN ALCON</p>
                        <span class="badge bg-secondary">30</span>
                        <span class="badge bg-success">{{$once}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($doce == 90)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JUAN CARLOS FERNANDEZ COLQUE</p>
                        <span class="badge bg-secondary">90</span>
                        <span class="badge bg-success">{{$doce}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($trece == 120)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA 608</b> <br> PISO 6
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA 608</b> <br> PISO 6
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>FRANZ BUITRAGO BARAHONA - RAFAEL MONTAÑO</p>
                        <span class="badge bg-secondary">120</span>
                        <span class="badge bg-success">{{$trece}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($catorce == 70)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 6
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 6
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>LORENSO CALLISAYA</p>
                        <span class="badge bg-secondary">70</span>
                        <span class="badge bg-success">{{$catorce}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($quince == 110)
                    <div class="card-header bg-success border-success text-center">
                        <b>AUDITORIUM</b> <br> PISO 7
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AUDITORIUM</b> <br> PISO 7
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>PAMELA ALISON CASTILLO VEGA - UNIV. GINGER LLIULLY SEGALES</p>
                        <span class="badge bg-secondary">110</span>
                        <span class="badge bg-success">{{$quince}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($diesiseis == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 7
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 7
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JESUS CARLOS JIMENEZ CLAROS</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$diesiseis}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($diesisiete == 90)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA 803</b> <br> PISO 8
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA 803</b> <br> PISO 8
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MARISOL SHIRLEY COLQUE TALI - MIRIAM VARGAS VILELA</p>
                        <span class="badge bg-secondary">90</span>
                        <span class="badge bg-success">{{$diesisiete}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-2">
                <div class="card align-items-center">
                    <!--
                    <img src="{{asset('img/medicina.jpg')}}" width="50px" height="50px" alt="">
                    -->
                    <div class="card-body">
                      <h1 class="card-title text-center">
                        {{$cont_medicina}}
                      </h1>
                      <p class="card-text text-center">INGRESO</p>
                     <div class="container">
                        <div class="row align-items-center justify-content-center">
                            @php
                            $total = 4013;
                            $falta = $total - $cont_medicina;
                            @endphp
                            <div class="col">
                                Total:
                                <div class="alert alert-warning" role="alert">
                                    <b>4013</b>
                                </div>
                            </div>
                            <div class="col">
                                Falta:
                                <div class="alert alert-danger" role="alert">
                                    <b>{{$falta}}</b>
                                </div>
                            </div>
                            <div class="col">
                                <a name="" id="" class="btn btn-primary " href="{{route('reportes')}}" role="button">Reporte Faltantes</a>
                            </div>
                        </div>
                     </div>
                      </div>
                    </div>
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($diesiocho == 60)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA 804</b> <br> PISO 8
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA 804</b> <br> PISO 8
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JUANA ALEJANDRA MENDOZA VARGAS</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-success">{{$diesiocho}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($diesinueve == 70)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 8
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 8
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>YUPANQUI (FISIOLOGIA)</p>
                        <span class="badge bg-secondary">70</span>
                        <span class="badge bg-success">{{$diesinueve}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veinte == 80)
                    <div class="card-header bg-success border-success text-center">
                        <b>1ER AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>1ER AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>GERMAN ERNESTO MELEAN GUMIEL</p>
                        <span class="badge bg-secondary">80</span>
                        <span class="badge bg-success">{{$veinte}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintiuno == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>2DO AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>2DO AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>LUIS SILVESTRE GONZALO QUIROGA MENDIETA</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$veintiuno}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintidos == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>3ER AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>3ER AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>LILY SALCEDO ORTIZ</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$veintidos}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintitres == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>4TO AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>4TO AÑO DE ENFERMERIA</b> <br> PISO 10
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>RUBEN DARIO COSTA BENAVIDES</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$veintitres}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veinticuatro == 70)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 10
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 10
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>YOLANDA LILIANA GONZALES RIOS</p>
                        <span class="badge bg-secondary">70</span>
                        <span class="badge bg-success">{{$veinticuatro}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veinticinco == 70)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA "A" TEC MEDICA</b> <br> PISO 11
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA "A" TEC MEDICA</b> <br> PISO 11
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>RAFAEL ANTONIO MACHICADO TERAN</p>
                        <span class="badge bg-secondary">70</span>
                        <span class="badge bg-success">{{$veinticinco}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintiseis == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA "B" TEC MEDICA</b> <br> PISO 11
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA "B" TEC MEDICA</b> <br> PISO 11
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>ROSARIO CAMACHO MENESES</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$veintiseis}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintisiete == 60)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 11
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 11
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>CARMEN ANGELICA REVOLLO YELMA</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-success">{{$veintisiete}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintiocho == 60)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA A SALUD PUB.</b> <br> PISO 12
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA A SALUD PUB.</b> <br> PISO 12
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MARIA ELENA VALLE ALARCON</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-success">{{$veintiocho}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($veintinueve == 60)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA B SALUD PUB.</b> <br> PISO 12
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA B SALUD PUB.</b> <br> PISO 12
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>TANIA MILENKA PATIÑO SANCHEZ</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-success">{{$veintinueve}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treinta == 70)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA C SALUD PUB.</b> <br> PISO 12
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA C SALUD PUB.</b> <br> PISO 12
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>ROBERTO BALTAZAR MOYA</p>
                        <span class="badge bg-secondary">70</span>
                        <span class="badge bg-success">{{$treinta}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treintaiuno == 37)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA D SALUD PUB.</b> <br> PISO 12
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA D SALUD PUB.</b> <br> PISO 12
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>DIEGO ERNESTO GUTIERREZ CONTRERAS</p>
                        <span class="badge bg-secondary">37</span>
                        <span class="badge bg-success">{{$treintaiuno}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treintaidos == 34)
                    <div class="card-header bg-success border-success text-center">
                        <b>AULA E SALUD PUB.</b> <br> PISO 12
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AULA E SALUD PUB.</b> <br> PISO 12
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>RUDDY EUSEBIO SOLIZ SOLIZ</p>
                        <span class="badge bg-secondary">34</span>
                        <span class="badge bg-success">{{$treintaidos}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treintaitres == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 12
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 12
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>PAOLA TATIANA QUINTANILLA DEHNE</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$treintaitres}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treintaicuatro == 160)
                    <div class="card-header bg-success border-success text-center">
                        <b>AUDITORIUM</b> <br> PISO 13
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>AUDITORIUM</b> <br> PISO 13
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>PAOLA VIVIANA LIZARAZU CHACON - NOEMI TIRADO</p>
                        <span class="badge bg-secondary">160</span>
                        <span class="badge bg-success">{{$treintaicuatro}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treintaicinco == 70)
                    <div class="card-header bg-success border-success text-center">
                        <b>PASILLO</b> <br> PISO 13
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>PASILLO</b> <br> PISO 13
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>CAROLINA FERAUDY</p>
                        <span class="badge bg-secondary">70</span>
                        <span class="badge bg-success">{{$treintaicinco}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-success">
                    @if ($treintaiseis == 50)
                    <div class="card-header bg-success border-success text-center">
                        <b>CAFETERIA</b> <br> PISO 13
                    </div>
                    @else
                    <div class="card-header bg-transparent border-success text-center">
                        <b>CAFETERIA</b> <br> PISO 13
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>LILIAN CAROLA VASQUEZ VERAZAIN</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-success">{{$treintaiseis}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-warning">
                    @if ($treintaisiete == 100)
                    <div class="card-header bg-warning border-warning text-center">
                        <b>AUDITORIUM A</b> <br> PISO 1
                    </div>
                    @else
                    <div class="card-header bg-transparent border-warning text-center">
                        <b>AUDITORIUM A</b> <br> PISO 1
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>ANGELA MARIANA QUIROZ PADILLA - VIVIANA MACHICADO</p>
                        <span class="badge bg-secondary">100</span>
                        <span class="badge bg-warning">{{$treintaisiete}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-warning">
                    @if ($treintaiocho == 100)
                    <div class="card-header bg-warning border-warning text-center">
                        <b>AUDITORIUM B</b> <br> PISO 1
                    </div>
                    @else
                    <div class="card-header bg-transparent border-warning text-center">
                        <b>AUDITORIUM B</b> <br> PISO 1
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>LUCIO ALVAREZ PAREDES - MARIA O. TORREZ TINTAYA</p>
                        <span class="badge bg-secondary">100</span>
                        <span class="badge bg-warning">{{$treintaiocho}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-warning">
                    @if ($treintainueve == 50)
                    <div class="card-header bg-warning border-warning text-center">
                        <b>AULA B</b> <br> PLANTA BAJA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-warning text-center">
                        <b>AULA B</b> <br> PLANTA BAJA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>RUBEN ARAOZ SANTACRUZ</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-warning">{{$treintainueve}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-warning">
                    @if ($cuarenta == 50)
                    <div class="card-header bg-warning border-warning text-center">
                        <b>AULA C</b> <br> PLANTA BAJA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-warning text-center">
                        <b>AULA C</b> <br> PLANTA BAJA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>HERNAN RIVERA</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-warning">{{$cuarenta}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-danger">
                    @if ($cuarentaiuno == 60)
                    <div class="card-header bg-danger border-danger text-center">
                        <b>AUDITORIUM</b> <br> PLANTA BAJA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-danger text-center">
                        <b>AUDITORIUM</b> <br> PLANTA BAJA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>NELSON RAMIREZ</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-danger">{{$cuarentaiuno}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-danger">
                    @if ($cuarentaidos == 51)
                    <div class="card-header bg-danger border-danger text-center">
                        <b>PRIMER AÑO</b> <br> SOTANO
                    </div>
                    @else
                    <div class="card-header bg-transparent border-danger text-center">
                        <b>PRIMER AÑO</b> <br> SOTANO
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MARCELINO GONZALES</p>
                        <span class="badge bg-secondary">51</span>
                        <span class="badge bg-danger">{{$cuarentaidos}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-danger">
                    @if ($cuarentaitres == 30)
                    <div class="card-header bg-danger border-danger text-center">
                        <b>SEGUNDO AÑO</b> <br> PLANTA BAJA
                    </div>
                    @else
                    <div class="card-header bg-transparent border-danger text-center">
                        <b>SEGUNDO AÑO</b> <br> PLANTA BAJA
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>IBANA VALVERDE</p>
                        <span class="badge bg-secondary">30</span>
                        <span class="badge bg-danger">{{$cuarentaitres}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-danger">
                    @if ($cuarentaicuatro == 45)
                    <div class="card-header bg-danger border-danger text-center">
                        <b>TERCER AÑO</b> <br> PRIMER PISO
                    </div>
                    @else
                    <div class="card-header bg-transparent border-danger text-center">
                        <b>TERCER AÑO</b> <br> PRIMER PISO
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JUAN PABLO RODRIGUEZ</p>
                        <span class="badge bg-secondary">45</span>
                        <span class="badge bg-danger">{{$cuarentaicuatro}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cuarentaicinco == 96)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA A</b> <br> PISO 1
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA A</b> <br> PISO 1
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JAVIER BARRANTES - ANA HERRERA</p>
                        <span class="badge bg-secondary">96</span>
                        <span class="badge bg-primary">{{$cuarentaicinco}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cuarentaiseis == 40)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>PASILLO</b> <br> PISO 1
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>PASILLO</b> <br> PISO 1
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>GUSTAVO VASQUEZ</p>
                        <span class="badge bg-secondary">40</span>
                        <span class="badge bg-primary">{{$cuarentaiseis}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cuarentaisiete == 55)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA E</b> <br> PISO 2
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA E</b> <br> PISO 2
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>YUKI ODE HIRAMATSU</p>
                        <span class="badge bg-secondary">55</span>
                        <span class="badge bg-primary">{{$cuarentaisiete}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cuarentaiocho == 84)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA B</b> <br> PISO 2
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA B</b> <br> PISO 2
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>ALVARO OSSIO</p>
                        <span class="badge bg-secondary">84</span>
                        <span class="badge bg-primary">{{$cuarentaiocho}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cuarentainueve == 60)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>PASILLO</b> <br> PISO 2
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>PASILLO</b> <br> PISO 2
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>ADALID ZAMORA</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-primary">{{$cuarentainueve}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuenta == 50)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA L</b> <br> PISO 3
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA L</b> <br> PISO 3
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JESSICA BARRON</p>
                        <span class="badge bg-secondary">50</span>
                        <span class="badge bg-primary">{{$cincuenta}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuentaiuno == 63)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA I</b> <br> PISO 3
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA I</b> <br> PISO 3
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JULIO LUNA</p>
                        <span class="badge bg-secondary">63</span>
                        <span class="badge bg-primary">{{$cincuentaiuno}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuentaidos == 60)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AULA K</b> <br> PISO 3
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AULA K</b> <br> PISO 3
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>JULIETA LUNA</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-primary">{{$cincuentaidos}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuentaitres == 60)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>PASILLO</b> <br> PISO 3
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>PASILLO</b> <br> PISO 3
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>MAURICIO ARRAYA</p>
                        <span class="badge bg-secondary">60</span>
                        <span class="badge bg-primary">{{$cincuentaitres}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuentaicuatro == 290)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>AUDITORIO</b> <br> PISO 4
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>AUDITORIO</b> <br> PISO 4
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>DINA ZAPANA - ZENOBIO NINA</p>
                        <span class="badge bg-secondary">290</span>
                        <span class="badge bg-primary">{{$cincuentaicuatro}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuentaicinco == 30)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>PASILLO</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>PASILLO</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>EDGAR CORDERO</p>
                        <span class="badge bg-secondary">30</span>
                        <span class="badge bg-primary">{{$cincuentaicinco}}</span>
                    </div>
                  </div>   
            </div>
            <div class="col-sm-1">
                <div class="card border-primary">
                    @if ($cincuentaiseis == 104)
                    <div class="card-header bg-primary border-primary text-center">
                        <b>SALA DE CONFERENCIA</b> <br> PISO 5
                    </div>
                    @else
                    <div class="card-header bg-transparent border-primary text-center">
                        <b>SALA DE CONFERENCIA</b> <br> PISO 5
                    </div>
                    @endif 

                    <div class="card-body text-center ">
                        <p>RUBEN PEÑAFIEL - NICANOR JOVE APARICIO</p>
                        <span class="badge bg-secondary">104</span>
                        <span class="badge bg-primary">{{$cincuentaiseis}}</span>
                    </div>
                  </div>   
            </div>

        </div>
    </div>





</body>
</html>