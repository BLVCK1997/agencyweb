<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;
use app\Mail\contactMail;

class contactController extends Controller
{
    //
    public function create(){
        return view('emails.contact');
    }
    public function store(){
        $data=request()->validate([
            "subject"=>"bail|required",
            "name"=>"bail|required|min:2",
            "firstname"=>"bail|required|min:2",
            "email"=>"bail|required",
            "phone"=>"bail|required",
            "category"=>"bail|required",
            "message"=>"bail|min:43"
        ]);
        Mail::to($data['email'])->send(new contactMail($data->except(['email'])));
        session()->flash('success', 'votre requête est effectuée');
        return redirect()->back();
    }

    public function devis(contactRequest $request){
        if($request()->isMethod('post')){
            $data=$request()->all();
            dd($data);
        }
        return view('emails/devis');
    }
}
