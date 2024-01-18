<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function reportes()
    {
        $faltantes = DB::select("SELECT *
        from postulantes p 
        left join registros r on p.CARNET = r.carnet
        where r.carnet is NULL and p.CARRERA_1 = 'MEDICINA'
        order by p.BLOQUE,p.PISO,p.AULA asc");
        $pdf = Pdf::loadView('reporte',['faltantes'=>$faltantes])->setPaper('latter','landscape');
        return $pdf->stream('reportes.pdf');
    }
    public function reportescv()
    {
        $faltantes = DB::select("SELECT *
        from postulantes p 
        left join registros r on p.CARNET = r.carnet
        where r.carnet is NULL and p.CARRERA_2 != ''
        order by p.BLOQUE,p.PISO,p.AULA asc");
        $pdf = Pdf::loadView('reportescv',['faltantes'=>$faltantes])->setPaper('latter','landscape');
        return $pdf->stream('reportes.pdf');
    }
}
