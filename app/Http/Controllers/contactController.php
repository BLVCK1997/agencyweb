<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function create(){
        return view('emails.contact');
    }
    public function store(){
        $data=request()->validate([
            "subject"=>"bail|required|numeric",
            "name"=>"bail|required|min:2",
            "firstname"=>"bail|required|min:2",
            "email"=>"bail|required",
            "phone"=>"bail|required",
            "category"=>"bail|required|numeric",
            "message"=>"bail|min:43"
        ]);
        dd ($data);
    }

    public function devis(contactRequest $request){
        if($request()->isMethod('post')){
            $data=$request()->all();
            dd($data);
        }
        return view('emails/devis');
    }
}
