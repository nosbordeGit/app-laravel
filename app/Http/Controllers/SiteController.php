<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contato()
    {
        $title= "Contatos";
        $info = "Entre em contato conosco através do e-mail:";
        return view ('site.contato', compact('title','info'));
    }

    public function index()
    {
        return view('site.index');
    }
}
