<?php


namespace App\Http\Controllers\MisConsultas;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class VacacionesController extends Controller
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

        $vacaciones = DB::table('trn_sistemas.vw_vacaciones')->where('pers_id',Auth::user()->pers_id)->get();
        //dd($vacaciones);
        return view('misconsultas/vacaciones',compact('vacaciones'));
    }

    public function personal_vacaciones(){

        $pers_vac = DB::select ('select vp.vacacion_pers_id,tp.NOMBRE1 || \' \' || tp.NOMBRE2 || \' \' || tp.APE_PAT || \' \' || tp.APE_MAT as title,
vp.fecha_inicio as "start", vp.fecha_inicio + num_dias AS "end" , \'true\'  as allday,
pue.puesto_nombre || \' - \' ||  area.area_nombre || \' - \' ||  a.sucursal_nombre || \' / Periodo \'|| pv.año_inicio || \' - \' || pv.anio_fin as "description", \'fa-plane\' as "icon"  from trn_rrhh.t_vacacion_pers vp
join TRN_RRHH.T_PERSONAL tp on tp.pers_id = vp.pers_id
join TRN_RRHH.M_PERIODO_VACACION pv on pv.periodo_vacacion_id = vp.periodo_vacacion_id
join trn_general.m_sucursal a on a.sucursal_id = tp.sucursal_id
join trn_rrhh.m_puesto pue on pue.PUESTO_ID = tp.puesto_id
JOIN  trn_rrhh.m_area area on area.AREA_ID = pue.AREA_ID
where fecha_inicio + num_dias >= sysdate and area.area_id != 2');

        return response()->json($pers_vac);
    }


}
