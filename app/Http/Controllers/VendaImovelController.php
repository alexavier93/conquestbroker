<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrabalheConoscoRequest;
use App\Mail\TrabalheConoscoMail;
use Illuminate\Support\Facades\Mail;

class VendaImovelController extends Controller
{
    public function index()
    {
 
        return view('programa.index');
  
    }


    public function enviaEmail(TrabalheConoscoRequest $request)
    {

        $data = $request->all();

        dd($data);

        Mail::to('alexandre.xavier@outlook.com')->send(new TrabalheConoscoMail($data));

        flash('Formulário enviado com sucesso!')->success();
        return redirect()->route('trabalheconosco.index');
  
    }

}
