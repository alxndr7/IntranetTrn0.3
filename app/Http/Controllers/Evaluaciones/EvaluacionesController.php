<?php


namespace App\Http\Controllers\Evaluaciones;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class EvaluacionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $posts;
    public function __construct(Posts $posts)
    {
        $this->middleware('auth');
        $this->posts = $posts;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluaciones/evaluaciones');
    }

    public function modal_nueva_evaluacion(){

        $evento = DB::table('trn_sistemas.m_evento')->where('evento_id',21)->get();

        return view('evaluaciones.modal_nueva_evaluacion',compact('evento'));
    }

    public function modal_nueva_pregunta_simple(){
        return view('evaluaciones.modal_nueva_pregunta_simple');
    }

    public function modal_nueva_pregunta_vf(){
        return view('evaluaciones.modal_nueva_pregunta_vf');
    }

    public function modal_nueva_pregunta_multiple(){
        return view('evaluaciones.modal_nueva_pregunta_multiple');
    }


}
