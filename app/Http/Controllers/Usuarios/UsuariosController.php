<?php


namespace App\Http\Controllers\Usuarios;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.perfil');
    }
}
