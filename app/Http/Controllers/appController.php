<?php

namespace App\Http\Controllers;
use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;

class appController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function service(){
        return view('services');
    }

    public function realisation(){
        return view('realisations');
    }

    public function contact_send(contactRequest $request){
                $data=$request->all();
                dd($data);
    }

    public function con

    public function devis(){
        return view('emails/devis');
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
