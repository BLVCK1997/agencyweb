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
    public function store(contactRequest $request){
        $data=$request->all();
        dd($data);
}
}
