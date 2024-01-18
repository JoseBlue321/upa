<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CvController extends Controller
{
    public function index()
    {
        //CONTADOR CV
        $cont_cv = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet')
        ->where('postulantes.CARRERA_2','<>','')
        ->get()->count('registros.carnet');

        //***************************CARRERAS VARIAS******************************************
        //******ID 45*/
        $cuarentaicinco = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','NUTRICION Y DIETETICA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','AULA A')
        ->get()->count('registros.carnet');
        //******ID 39*/
        $treintainueve = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - BIOIMAGENOLOGIA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PLANTA BAJA')
        ->where('postulantes.AULA','=','AULA B')
        ->get()->count('registros.carnet');
        //******ID 47*/
        $cuarentaisiete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','PROGRAMA - TERAPIA OCUPACIONAL')
        ->orWhere('postulantes.CARRERA_2','=','PROGRAMA - FONOAUDIOLOGIA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 2')
        ->where('postulantes.AULA','=','AULA E')
        ->get()->count('registros.carnet');
        //******ID 48*/
        $cuarentaiocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - LABORATORIO CLINICO')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 2')
        ->where('postulantes.AULA','=','AULA B')
        ->get()->count('registros.carnet');
        //******ID 38*/
        $treintaiocho = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - BIOIMAGENOLOGIA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','AUDITORIUM B')
        ->get()->count('registros.carnet');
        //******ID 50*/
        $cincuenta = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - BIOIMAGENOLOGIA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA L')
        ->get()->count('registros.carnet');
        //******ID 51*/
        $cincuentaiuno = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - FISIOTERAPIA Y KINESIOLOGIA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA I')
        ->get()->count('registros.carnet');
        //******ID 52*/
        $cincuentaidos = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - FISIOTERAPIA Y KINESIOLOGIA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 3')
        ->where('postulantes.AULA','=','AULA K')
        ->get()->count('registros.carnet');
        //******ID 37*/
        $treintaisiete = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','TEC MED - FISIOTERAPIA Y KINESIOLOGIA')
        ->where('postulantes.BLOQUE','=','MORFOLOGICAS')
        ->where('postulantes.PISO','=','PISO 1')
        ->where('postulantes.AULA','=','AUDITORIUM A')
        ->get()->count('registros.carnet');
        //******ID 54*/
        $cincuentaicuatro = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','ENFERMERIA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 4')
        ->where('postulantes.AULA','=','AUDITORIO')
        ->get()->count('registros.carnet');
        //******ID 56*/
        $cincuentaiseis = DB::table('registros')->distinct('registros.carnet')
        ->join('postulantes','registros.carnet','=','postulantes.CARNET')
        ->select('registros.carnet') 
        ->where('postulantes.CARRERA_2','=','ENFERMERIA')
        ->where('postulantes.BLOQUE','=','TECNOLOGIA MEDICA')
        ->where('postulantes.PISO','=','PISO 5')
        ->where('postulantes.AULA','=','SALA DE CONFERENCIA A y B')
        ->get()->count('registros.carnet');



        return view('cv',[
            'cont_cv'=>$cont_cv,

            'cuarentaicinco'=>$cuarentaicinco,
            'treintainueve'=>$treintainueve,
            'cuarentaisiete'=>$cuarentaisiete,
            'cuarentaiocho'=>$cuarentaiocho,
            'treintaiocho'=>$treintaiocho,
            'cincuenta'=>$cincuenta,
            'cincuentaiuno'=>$cincuentaiuno,
            'cincuentaidos'=>$cincuentaidos,
            'treintaisiete'=>$treintaisiete,
            'cincuentaicuatro'=>$cincuentaicuatro,
            'cincuentaiseis'=>$cincuentaiseis,
        ]);
    }
}
