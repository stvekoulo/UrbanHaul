<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function calculerPointRecette(Request $request)
{
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    // Ajoutez votre logique pour calculer le montant gagné sur la période spécifiée

    return view('agent/home', ['start_date' => $start_date, 'end_date' => $end_date]);
}
}
