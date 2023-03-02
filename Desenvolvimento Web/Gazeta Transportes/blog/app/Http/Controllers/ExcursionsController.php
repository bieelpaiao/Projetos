<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Excursion;

class ExcursionsController extends Controller
{
    protected function show() {
        $excursions = Excursion::with('cities')->get();

        return view('site.home', ['excursions' => $excursions]);
    }
}
