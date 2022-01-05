<?php

namespace App\Http\Controllers;

use App\Models\Fiche_Frais;
use App\Models\Ligne_Frais;
use App\Models\DAOFiche_Frais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FicheFraisController extends Controller
{
    public function show(){

        $ficheFrais = new Fiche_Frais();
        $desFiches = Fiche_Frais::where('Date','1999-08-30')->where('Identifiant','adtdyganed')->get();

        if(count($desFiches) == 1){
            $ficheFrais = $desFiches[0];
        }
        

        $desLigneFrais = Ligne_Frais::where('Date','1999-08-30')->where('Identifiant','adtdyganed')->get();

        return view('Fiche_Frais', ['ficheFrais' => $ficheFrais], ['desLigneFrais' => $desLigneFrais]);
    }
}
