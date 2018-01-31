<?php


namespace App\Http\Controllers\Cumple;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CumpleController extends Controller
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
        //$cumples = $this->posts->get_cumples();
        $cumpleHoy = DB::select("select per.PERS_ID,per.NOMBRE1, trunc(months_between(sysdate,per.NAC_FECHA)/12) edad, tipo.TIPO_NOMBRE sexo, a.sucursal_nombre sucursal from trn_rrhh.t_personal per
                      join trn_general.m_tipo tipo
                      on tipo.TIPO_ID = per.sexo_id
                      join trn_general.m_sucursal a 
                      on a.sucursal_id = per.sucursal_id
                      where EXTRACT(month from NAC_FECHA) = EXTRACT(month from sysdate) and EXTRACT(day from NAC_FECHA) = EXTRACT(day from sysdate) AND estado_trabajador_id = '200001'");
        return view('cumpleanios/cumple',compact('cumpleHoy'));
    }


    public function get_cumples(){

        $cumples=DB::table('trn_sistemas.vw_cumple')->get();
        return  response()->json($cumples);
    }
}
