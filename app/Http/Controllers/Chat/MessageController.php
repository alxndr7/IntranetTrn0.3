<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\Usuario;
use App\Events\MessageSentEvent;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //dd(Auth::user());
        //dd(Auth::user());
        //return response()->json(Auth::user());
        $user = Auth::user();
        $usuario = DB::table('trn_sistemas.m_usuario')->where('usuario_id',Auth::user()->usuario_id)->get();
        $friend =  DB::table('trn_sistemas.m_usuario')->where('usuario_id',401)->get();
        return view('chat.chat_template2',compact('usuario','friend'));
    }

    //
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function fetchContacts()
    {
       // $contactos = DB::table('trn_sistemas.m_usuario')->get();
        $contactos = DB::select('select usu.*, per.nombre1 ||\' \'||  per.ape_pat  as nombre from trn_sistemas.m_usuario usu
join trn_rrhh.t_personal per on per.pers_id = usu.pers_id');
        return $contactos;
    }

    public function sendMessage(Request $request)
    {
        //dd(Usuario::find(Auth::user()->usuario_id));
        //$model->getOriginal()['foo']
        //$user = Usuario::find(Auth::user()->usuario_id);
        //dd(Auth::User());
        //$user = DB::table('trn_sistemas.m_usuario')->where('usuario_id',Auth::user()->usuario_id)-get();
        $user = Auth::user();
        //return json_encode($request->input('message'));
        $message = Message::create([
            'usuario_id' => Auth::user()->usuario_id,
            'message' => $request->input('message')
        ]);


        //return response()->json($msg);
                /*
        $user = Auth::user();

        $message = Message::create([
            'message' => $request->message,
            'user_id' => Auth::user()->id,
        ]);
*/
        $usuario = DB::table('trn_sistemas.m_usuario')->where('usuario_id',Auth::user()->usuario_id)->get();
        broadcast(new MessageSentEvent($usuario, $message))->toOthers();
    }

}
