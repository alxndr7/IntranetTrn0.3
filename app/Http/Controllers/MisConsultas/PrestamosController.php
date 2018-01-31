<?php


namespace App\Http\Controllers\MisConsultas;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PrestamosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $posts;
    public function __construct(Posts $posts)
    {
        //$this->middleware('auth');
        $this->posts = $posts;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('misconsultas/prestamos');
    }


}
