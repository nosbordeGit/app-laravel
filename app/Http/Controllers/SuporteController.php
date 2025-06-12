<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suporte;

class SuporteController extends Controller
{
    public function index()
    {
        $title = 'Suporte';
        return view ('site.suporte.index', compact('title'));
    }

    public function suporte_create(Request $request)
    {
        Suporte::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'descricao' => $request->descricao,
            
        ]);
        return redirect()->route('suporte.listar')->with('success', 'Solicitação de suporte criada com sucesso!');
       
    }

    public function edit()
    {
        return view ('site.suporte.edit');
    }

    public function listar()
    {
        $suportes = Suporte::all();

        //dd($suportes);
        return view ('site.suporte.listar', compact('suportes'));
    }
}
