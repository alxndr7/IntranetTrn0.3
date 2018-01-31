<?php


namespace App\Http\Controllers\MisConsultas;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class BoletasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->middleware('auth');
        //$this->posts = $posts;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('hola');
        $carpeta_id = Auth::user()->pers_id;
        $boletas = [];
        $path = public_path().'/boletas/'.$carpeta_id;
        if(File::exists($path)){
            $filesInFolder = File::files($path);
            foreach($filesInFolder as $path)
            {
                $boletas[] = pathinfo($path);
            }
        }
        return view('misconsultas.boletas',compact('boletas','carpeta_id'));
    }


}
