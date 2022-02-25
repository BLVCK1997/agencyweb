<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Http\Requests\devisRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\contactMail;

class contactController extends Controller
{
    //
    public function create(){
        return view('emails.contact');
    }
    public function store(contactRequest $request){
        $data=$request->all();
        dd($data);
        Mail::to($data['email'])->send(new contactMail($data));
        session()->flash('success', 'votre requête est effectuée');
        return redirect()->back();
    }
}
