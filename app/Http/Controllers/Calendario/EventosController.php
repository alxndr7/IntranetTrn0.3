<?php


namespace App\Http\Controllers\Calendario;
use App\Http\Controllers\Controller;
use App\Models\Eventos;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class EventosController extends Controller
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
        /*$cumpleHoy = DB::select("select per.PERS_ID,per.NOMBRE1, trunc(months_between(sysdate,per.NAC_FECHA)/12) edad, tipo.TIPO_NOMBRE sexo from trn_rrhh.t_personal per
                      join trn_general.m_tipo tipo
                      on tipo.TIPO_ID = per.sexo_id
                      where EXTRACT(month from NAC_FECHA) = EXTRACT(month from sysdate) and EXTRACT(day from NAC_FECHA) = EXTRACT(day from sysdate) AND estado_trabajador_id = '200001'");*/
        //$eventos = DB::table('trn_sistemas.m_evento')->where('evento_estado','200001')->get();
        //dd($eventos);

        return view('calendario/eventos');
    }

    public function eventos_show(){
        return view('calendario/eventos_show');
    }



    public function insert_evento(Request $request){
/*
        $event =new Eventos();
        $event->evento_titulo = $request['title'];
        $event->evento_desc = $request['description'];
        $event->fecha_inicio =  $request['fechaDesde'].' '.$request['clockpicker'];
        $event->fecha_fin = $request['fechaHasta'].' '.$request['clockpicker2'];
        $event->evento_icon =  $request['iconselect'];
*/
        $title = $request['title'];
        $desc = $request['description'];
        $fecha_inicio = $request['fechaDesde'].' '.$request['clockpicker'];
        $fecha_fin = $request['fechaHasta'].' '.$request['clockpicker2'];
        $icon = $request['iconselect'];
        $color = $request['priority'];
        $usuario = Auth::user()->usuario_id;
        $estado= '200001';


        $flag = DB::table('trn_sistemas.m_evento')->insert([
            ['evento_id'=>  DB::raw('evento_seq.nextval'),'evento_titulo' => $title, 'evento_desc' => $desc, 'fecha_inicio'=>DB::raw("TO_DATE('".$fecha_inicio."', 'mm/dd/yyyy hh24:mi:ss')"), 'fecha_fin'=>DB::raw("TO_DATE('".$fecha_fin."', 'mm/dd/yyyy hh24:mi:ss')"),'evento_icon'=>$icon,'evento_color'=>$color,'usuario_creacion'=>$usuario,'evento_estado'=>$estado]
        ]);


/*


        $flag =  DB::select("call PA_INSERT_EVENTO(?,?,?,?,?,?,?,?)",array($title,$desc,$fecha_inicio,$fecha_fin,$icon,$color,$usuario,$estado));
        //execute ('EVENTO PRUEBA','EVENTO DE PRUEBA BASE DE DATOS', '12/22/2017 08:00','12/22/2017 12:00','fa-info','bg-color-darken txt-color-white',387,'200001');
        //$flag = DB::select('');*/

        return  response()->json($flag);
    }

    public function get_eventos(){

        /*
         * $directory = '/ruta/directorio';
   File::makeDirectory($directory);
         */
        $eventos = DB::select(DB::raw('select evento_id as "id" ,evento_titulo as "title", evento_desc as "description", fecha_inicio as "start", fecha_fin as "end",evento_color as "className", evento_icon as "icon" from trn_sistemas.m_evento where evento_estado = 200001'));

       // dd($eventos);
        return response()->json($eventos,200);
    }

    public function get_edit_evento(Request $req){

        $evento = DB::table('trn_sistemas.m_evento')->where('evento_id',$req->id)->get();
        $imagenes = [];
        $carpeta_id = $req->id;
        $path = public_path().'/uploads/'.$carpeta_id;
        if(File::exists($path)){
            $filesInFolder = File::files($path);
            foreach($filesInFolder as $path)
            {
                $imagenes[] = pathinfo($path);
            }
        }
        return view('calendario.eventos_editar',compact('evento','imagenes','carpeta_id'));
    }

    public function update_evento(Request $request){

        //return  response()->json($request->all());

        $evento_id = $request['evento_id'];
        $title = $request['title1'];
        $desc = $request['description1'];
        $fecha_inicio = $request['fechaDesde1'].' '.$request['clockpicker1'];
        $fecha_fin = $request['fechaHasta1'].' '.$request['clockpicker21'];
        $icon = $request['iconselect1'];
        $color = $request['priority1'];
        $usuario = Auth::user()->usuario_id;
        $estado= $request['estado'];

        $flag = DB::table('trn_sistemas.m_evento')->where('evento_id',$evento_id)->update([
                'evento_titulo' => $title,
                'evento_desc' => $desc,
                'fecha_inicio'=>DB::raw("TO_DATE('".$fecha_inicio."', 'mm/dd/yyyy hh24:mi:ss')"),
                'fecha_fin'=>DB::raw("TO_DATE('".$fecha_fin."', 'mm/dd/yyyy hh24:mi:ss')"),
                'evento_icon'=>$icon,
                'evento_color'=>$color,
                'usuario_update'=>$usuario,
                'evento_estado'=>$estado
        ]);


        return  response()->json($flag);
    }

    public function subir_archivos_dl(Request $request){
        $imagenes = [];
        $basename = [];
        $path = public_path().'/uploads/16';
        $filesInFolder = File::files($path);
        foreach($filesInFolder as $path)
        {
            $imagenes[] = pathinfo($path);
        }
        $img = json_encode($imagenes);

        /*$files_dl = collect(File::files($path))->map(function($file) {
        return Storage::disk('s3')->url($file);
    });*/

        //$files = File::files($path);
        //$numfiles = count($files);
        return view('calendario.dl_subir_archivos',compact('img'));

    }

    public function eliminar_archivos_dl(Request $request){

        $imagenes = [];
        $carpeta_id = $request->id;
        $path = public_path().'/uploads/'.$carpeta_id;
        $filesInFolder = File::files($path);
        foreach($filesInFolder as $path)
        {
            $imagenes[] = pathinfo($path);
        }
        $img = json_encode($imagenes);

        //return response()->json($img);
        return view('calendario.dl_eliminar_archivos',compact('imagenes','carpeta_id'));
    }

    public function eliminar_archivos(Request $request){

        $list_delete = $request->list_eliminar;
        $carpeta_id = $request->id;
        for($i = 0 ; $i < count($list_delete);$i++){
            File::delete('uploads/'.$carpeta_id.'/'.$list_delete[$i]);
        }

        $imagenes = [];
        $path = public_path().'/uploads/'.$carpeta_id;
        if(File::exists($path)){
            $filesInFolder = File::files($path);
            foreach($filesInFolder as $path)
            {
                $imagenes[] = pathinfo($path);
            }
        }

        return view('calendario.ajax_Recargar_imagenes',compact('imagenes','carpeta_id'));

    }
}
