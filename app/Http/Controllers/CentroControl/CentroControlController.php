<?php


namespace App\Http\Controllers\CentroControl;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CentroControlController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

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

        return view('centro_de_control/map');
    }

    function tracking_vehiculo(){

        $tracking = DB::connection('avl')->table('HRT_PTO_ULTIMO')->get();//->select("SELECT * FROM avl.HRT_GP_AVL WHERE VEH_ID = 2095 and GP_FECHA_SYS > '25/12/2017' order by gp_fecha");

        //$tracking = DB::connection('avl')->Select("SELECT * FROM avl.HRT_GP_AVL WHERE VEH_ID = 2095 and GP_FECHA_SYS > '04/01/2018'");

        return  response()->json($tracking);
    }

}
