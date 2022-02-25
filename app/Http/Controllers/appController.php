<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class appController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function services(){
        return view('services');
    }

    public function realisations(){
        return view('realisations');
    }


    //stratege

    public function positionnement(){
        return view('stratege.positionnement');
    }
    public function platform_marque(){
        return view('stratege.platform_marque');
    }
    public function expression_area(){
        return view('stratege.expression_area');
    }
    public function nom_marque(){
        return view('stratege.nom_marque');
    }


    //graphique

    public function logo(){
        return view('graphique.logo');
    }
    public function identity(){
        return view('graphique.identity');
    }
    public function motion(){
        return view('graphique.motion');
    }
    public function video(){
        return view('graphique.video');
    }

}
