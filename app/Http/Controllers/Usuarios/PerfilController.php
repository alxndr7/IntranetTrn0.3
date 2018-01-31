<?php


namespace App\Http\Controllers\Usuarios;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PerfilController extends Controller
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

        $info_usuario=DB::table('trn_sistemas.vw_personal')->where('usuario_id',Auth::user()->usuario_id)->get()->first();
        //dd($info_usuario);

        return view('usuarios/perfil', compact('info_usuario'));
    }

    public function cambiar_password(Request $req){

        $update = DB::table('trn_sistemas.m_usuario')->where('usuario_id',Auth::user()->usuario_id)->update(['usu_password' => $req->password]);
        //if($update)
            return redirect()->route('login');
        //return view('auth/login');
    }

    public function modal_ver_firma(){

        $info_firma = DB::Select('select per.nombre1, per.nombre2, per.ape_pat, per.ape_mat, per.mail_trn, per.TELEF_TRN_RPC, pue.PUESTO_NOMBRE, area.AREA_NOMBRE from trn_rrhh.t_personal per
                        join trn_rrhh.m_puesto pue
                        on pue.PUESTO_ID = per.puesto_id
                        JOIN  trn_rrhh.m_area area
                        on area.AREA_ID = pue.AREA_ID where per.PERS_ID ='. Auth::user()->pers_id);

        return view('usuarios/modal_firma',compact('info_firma'));
    }
}
