<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Excursion;
use PDF;
use Illuminate\Http\Request;

class ExcursionsController extends Controller
{
    protected function show() {
        $excursions = Excursion::with('cities')->where("ativa", "=", 1)->get();

        return view('site.home', ['excursions' => $excursions]);
    }

    public function generatePdf(Request $request, $id)
    {
        $excursion = Excursion::find($id);
        $data = $request->dia;
        $clients = $excursion->clients()->where([
            ["dia", "=", $data]
        ])->get();

        $pdf = PDF::loadView('site.pdf', ['clients' => $clients, 'excursions' => $excursion, 'data' => $data]); // carrega a view 'pdf.excursions' com os dados das excursões

        return $pdf->stream('excursions.pdf'); // retorna o PDF como resposta para o navegador
    }

    public function chooseDays($id)
    {
        $excursion = Excursion::find($id);
        return view('site.excursao_dias', ['excursion' => $excursion]);
    }
}
