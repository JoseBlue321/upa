<?php

namespace App\Http\Controllers;

use App\Models\Biometrico;
use App\Models\Foto;
use App\Models\Postulante;
use App\Models\Registro;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostulanteController extends Controller
{

    public function index()
    {
        //CONTADOR MEDICINA
        $cont_medicina = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet')
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->get()->count('registros.carnet');

        //***************************EDIFICIO MEDICINA******************************************
        //******ID 1*/
        $uno = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PLANTA BAJA')
        ->where('postulantes.AULA','=','BIBLIOTECA')
        ->get()->count('registros.carnet');

        //******ID 2*/
        $dos = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA k1')
        ->get()->count('registros.carnet');

        //******ID 3*/
        $tres = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA K2')
        ->get()->count('registros.carnet');

        //******ID 4*/
        $cuatro = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA L')
        ->get()->count('registros.carnet');

        //******ID 5*/
        $cinco = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 4')
        ->where('postulantes.AULA','=','AULA 404')
        ->get()->count('registros.carnet');

        //******ID 6*/
        $seis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 4')
        ->where('postulantes.AULA','=','AULA 408')
        ->get()->count('registros.carnet');

        //******ID 7*/
        $siete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 4')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');

        //******ID 8*/
        $ocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','AUDITORIO DE HISTOLOGIA')
        ->get()->count('registros.carnet');

        //******ID 9*/
        $nueve = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','AULA A DE HISTOLOGIA')
        ->get()->count('registros.carnet');

        //******ID 10*/
        $diez = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','AULA B DE HISTOLOGIA')
        ->get()->count('registros.carnet');

        //******ID 11*/
        $once = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','AULA C  DE HISTOLOGIA')
        ->get()->count('registros.carnet');

        //******ID 12*/
        $doce = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');

        //******ID 13*/
        $trece = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 6')
        ->where('postulantes.AULA','=','AULA 608')
        ->get()->count('registros.carnet');

        //******ID 14*/
        $catorce = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 6')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');

        //******ID 15*/
        $quince = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 7')
        ->where('postulantes.AULA','=','AUDITORIUM')
        ->get()->count('registros.carnet');
        //******ID 16*/
        $diesiseis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 7')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 17*/
        $diesisiete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 8')
        ->where('postulantes.AULA','=','AULA 803')
        ->get()->count('registros.carnet');
        //******ID 18*/
        $diesiocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 8')
        ->where('postulantes.AULA','=','AULA 804')
        ->get()->count('registros.carnet');
        //******ID 19*/
        $diesinueve = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 8')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 20*/
        $veinte = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 10')
        ->where('postulantes.AULA','=','PRIMER AÑO DE ENFERMERIA')
        ->get()->count('registros.carnet');
        //******ID 21*/
        $veintiuno = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 10')
        ->where('postulantes.AULA','=','SEGUNDO AÑO ENFERMERIA')
        ->get()->count('registros.carnet');
        //******ID 22*/
        $veintidos = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 10')
        ->where('postulantes.AULA','=','TERCER AÑO DE ENFERMERIA')
        ->get()->count('registros.carnet');
        //******ID 23*/
        $veintitres = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 10')
        ->where('postulantes.AULA','=','CUARTO AÑO DE ENFERMERIA')
        ->get()->count('registros.carnet');
        //******ID 24*/
        $veinticuatro = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 10')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 25*/
        $veinticinco = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO11')
        ->where('postulantes.AULA','=','AULA "A" TEC MEDICA')
        ->get()->count('registros.carnet');
        //******ID 26*/
        $veintiseis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 11')
        ->where('postulantes.AULA','=','AULA "B" TEC MEDICA')
        ->get()->count('registros.carnet');
        //******ID 27*/
        $veintisiete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO11')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 28*/
        $veintiocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 12')
        ->where('postulantes.AULA','=','AULA A SALUD PUBLICA')
        ->get()->count('registros.carnet');
        //******ID 29*/
        $veintinueve = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 12')
        ->where('postulantes.AULA','=','AULA B SALUD PUBLICA')
        ->get()->count('registros.carnet');
        //******ID 30*/
        $treinta = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO12')
        ->where('postulantes.AULA','=','AULA C SALUD PUBLICA')
        ->get()->count('registros.carnet');
        //******ID 31*/
        $treintaiuno = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 12')
        ->where('postulantes.AULA','=','AULA D SALUD PUBLICA')
        ->get()->count('registros.carnet');
        //******ID 32*/
        $treintaidos = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 12')
        ->where('postulantes.AULA','=','AULA E SALUD PUBLICA')
        ->get()->count('registros.carnet');
        //******ID 33*/
        $treintaitres = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 12')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 34*/
        $treintaicuatro = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 13')
        ->where('postulantes.AULA','=','AUDITORIUM')
        ->get()->count('registros.carnet');
        //******ID 35*/
        $treintaicinco = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 13')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 36*/
        $treintaiseis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MEDICINA')
        ->where('postulantes.PISO','=','PISO 13')
        ->where('postulantes.AULA','=','CAFETERIA')
        ->get()->count('registros.carnet');
        //******ID 37*/
        $treintaisiete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','AUDITORIUM A')
        ->get()->count('registros.carnet');
        //******ID 38*/
        $treintaiocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','AUDITORIUM B')
        ->get()->count('registros.carnet');
        //******ID 39*/
        $treintainueve = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PLANTA BAJA')
        ->where('postulantes.AULA','=','AULA B')
        ->get()->count('registros.carnet');
        //******ID 40*/
        $cuarenta = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PLANTA BAJA')
        ->where('postulantes.AULA','=','AULA C')
        ->get()->count('registros.carnet');
        //******ID 41*/
        $cuarentaiuno = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','NUTRICION')
        ->where('postulantes.PISO','=','PLANTA BAJA')
        ->where('postulantes.AULA','=','AUDITORIUM')
        ->get()->count('registros.carnet');
        //******ID 42*/
        $cuarentaidos = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','NUTRICION')
        ->where('postulantes.PISO','=','SOTANO')
        ->where('postulantes.AULA','=','PRIMER AÑO')
        ->get()->count('registros.carnet');
        //******ID 43*/
        $cuarentaitres = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','NUTRICION')
        ->where('postulantes.PISO','=','PLANTA BAJA')
        ->where('postulantes.AULA','=','SEGUNDO AÑO')
        ->get()->count('registros.carnet');
        //******ID 44*/
        $cuarentaicuatro = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','NUTRICION')
        ->where('postulantes.PISO','=','PRIMER PISO')
        ->where('postulantes.AULA','=','TERCER AÑO')
        ->get()->count('registros.carnet');
        //******ID 45*/
        $cuarentaicinco = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','AULA A')
        ->get()->count('registros.carnet');
        //******ID 46*/
        $cuarentaiseis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 47*/
        $cuarentaisiete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 2')
        ->where('postulantes.AULA','=','AULA E')
        ->get()->count('registros.carnet');
        //******ID 48*/
        $cuarentaiocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 2')
        ->where('postulantes.AULA','=','AULA B')
        ->get()->count('registros.carnet');
        //******ID 49*/
        $cuarentainueve = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 2')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 50*/
        $cincuenta = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA L')
        ->get()->count('registros.carnet');
        //******ID 51*/
        $cincuentaiuno = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA I')
        ->get()->count('registros.carnet');
        //******ID 52*/
        $cincuentaidos = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA K')
        ->get()->count('registros.carnet');
        //******ID 53*/
        $cincuentaitres = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 54*/
        $cincuentaicuatro = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 4')
        ->where('postulantes.AULA','=','AUDITORIO')
        ->get()->count('registros.carnet');
        //******ID 55*/
        $cincuentaicinco = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','PASILLO')
        ->get()->count('registros.carnet');
        //******ID 56*/
        $cincuentaiseis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_1','=','MEDICINA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','SALA DE CONFERENCIA A y B')
        ->get()->count('registros.carnet');

        return view('home',[
            'cont_medicina'=>$cont_medicina,
            'uno'=>$uno,
            'dos'=>$dos,
            'tres'=>$tres,
            'cuatro'=>$cuatro,
            'cinco'=>$cinco,
            'seis'=>$seis,
            'siete'=>$siete,
            'ocho'=>$ocho,
            'nueve'=>$nueve,
            'diez'=>$diez,
            'once'=>$once,
            'doce'=>$doce,
            'trece'=>$trece,
            'catorce'=>$catorce,
            'quince'=>$quince,
            'diesiseis'=>$diesiseis,
            'diesisiete'=>$diesisiete,
            'diesiocho'=>$diesiocho,
            'diesinueve'=>$diesinueve,
            'veinte'=>$veinte,
            'veintiuno'=>$veintiuno,
            'veintidos'=>$veintidos,
            'veintitres'=>$veintitres,
            'veinticuatro'=>$veinticuatro,
            'veinticinco'=>$veinticinco,
            'veintiseis'=>$veintiseis,
            'veintisiete'=>$veintisiete,
            'veintiocho'=>$veintiocho,
            'veintinueve'=>$veintinueve,
            'treinta'=>$treinta,
            'treintaiuno'=>$treintaiuno,
            'treintaidos'=>$treintaidos,
            'treintaitres'=>$treintaitres,
            'treintaicuatro'=>$treintaicuatro,
            'treintaicinco'=>$treintaicinco,
            'treintaiseis'=>$treintaiseis,
            'treintaisiete'=>$treintaisiete,
            'treintaiocho'=>$treintaiocho,
            'treintainueve'=>$treintainueve,
            'cuarenta'=>$cuarenta,
            'cuarentaiuno'=>$cuarentaiuno,
            'cuarentaidos'=>$cuarentaidos,
            'cuarentaitres'=>$cuarentaitres,
            'cuarentaicuatro'=>$cuarentaicuatro,
            'cuarentaicinco'=>$cuarentaicinco,
            'cuarentaiseis'=>$cuarentaiseis,
            'cuarentaisiete'=>$cuarentaisiete,
            'cuarentaiocho'=>$cuarentaiocho,
            'cuarentainueve'=>$cuarentainueve,
            'cincuenta'=>$cincuenta,
            'cincuentaiuno'=>$cincuentaiuno,
            'cincuentaidos'=>$cincuentaidos,
            'cincuentaitres'=>$cincuentaitres,
            'cincuentaicuatro'=>$cincuentaicuatro,
            'cincuentaicinco'=>$cincuentaicinco,
            'cincuentaiseis'=>$cincuentaiseis,
        ]);
    }


}
