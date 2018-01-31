<?php


namespace App\Http\Controllers\Galerias;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GaleriasController extends Controller
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
        $path = public_path().'/uploads';
        $list = File::directories($path);

        $evento = DB::table('trn_sistemas.m_evento')->where('evento_estado','200001')->get();

        return view('galerias/galerias',compact('list','evento'));
    }

    public function upload_image(Request $request){

        $carpeta_id = $request->dl_evento_id;
        $path = public_path().'/uploads/'.$carpeta_id;
        $file = $request->file('file');
        //var_dump($request->file('file'));

        $photo = $file->getClientOriginalName();
        $flag = $file->move($path, $photo);

       // return  response()->json($flag);

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

    function imagenes_evento(Request $request){

        $carpeta_id = $request->id;
        $imagenes = [];
        $path = public_path().'/uploads/'.$carpeta_id;
        if(File::exists($path)){
            $filesInFolder = File::files($path);
            foreach($filesInFolder as $path)
            {
                $imagenes[] = pathinfo($path);
            }
        }

        return view('calendario.ajax_galeria_imagenes',compact('imagenes','carpeta_id'));
    }

}
