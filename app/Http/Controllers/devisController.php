<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class devisController extends Controller
{
    //
    public function create(){
        return view('emails.devis');
    }

    public function store(devisRequest $request){
        if($request->isMethod('post')){
            $data=$request->all();
            dd($data);
            Mail::to(MAIL_USERNAME)->send(new devisMail($data));
            session()->flash('success', 'votre devis est en cours de production');
            return redirect()->back();
        }
    }
}
