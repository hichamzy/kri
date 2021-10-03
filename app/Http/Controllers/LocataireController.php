<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class LocataireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id){
        $maison=Maison::find($id);
        return ['maisons'=>$maison];
    }
    public function create($request){
        $maison= new Maison();
        $maison->louer_par_mois=$request->louer_par_mois;
        $maison->louer_par_jour=$request->louer_par_jour;
        $maison->adresse=$request->adresse;
        $maison->ville=$request->ville;
        $maison->photo=$request->photo;
        $maison->description=$request->description;
        $maison->save();
    }
    public function update($id,$request){
        $maison=Maison::find($id);
        $maison->louer_par_mois=$request->louer_par_mois;
        $maison->louer_par_jour=$request->louer_par_jour;
        $maison->adresse=$request->adresse;
        $maison->ville=$request->ville;
        $maison->photo=$request->photo;
        $maison->description=$request->description;
        $maison->save();

    }
    public function delete($id){
        $maison=Maison::find($id);
        $maison->delete();

    }
    
}
