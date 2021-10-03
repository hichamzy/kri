<?php

namespace App\Http\Controllers;
use App\Models\Maison;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;


class VisiteurController extends Controller
{
    public function rechercher(){
        $resultats=QueryBuilder::for(Maison::class)
        ->allowedFilters(['ville','louer_par_mois','louer_par_jour'])
        ->get();
        
    }
}
