<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Whatsapp;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //factory(Usuario::class, 30)->create();
        $usuario = Usuario::all();
        return view('dashboard', compact('usuario'));
    }

    public function envio(Request $request){

      $hola = $request->datos;
      foreach ($hola as $value) {
        $whats = new Whatsapp();
        $whats->telefono = $value;
        $whats->mensaje = $request->texto;
        $whats->save();
      }

    }
}
