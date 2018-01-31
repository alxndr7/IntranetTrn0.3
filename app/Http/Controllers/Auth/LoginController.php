<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Redirec;
use App\Repositories\Posts;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $posts;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Posts $posts)
    {
        $this->posts = $posts;
        $this->middleware('guest',['only' => 'showLoginForm']);
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(){

        $credentiasl = $this->validate(request(),[
            'usu_usuario' => 'required|string',
            'usu_password' => 'required|string'
        ]);

        if(Auth::attempt($credentiasl)){
            return redirect()->route('home');
        }
        return back()->withErrors(['usu_usuario'=> 'Credenciales Incorrectas']);
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('login');
    }

    public function login_validate(Request $req){

        if($this->posts->custom_login($req->user, $req->password))
            return redirect()->route('home');
        else
            return back()->withInput();


        //dd($client->request( 'POST', 'oauth/token?'.http_build_query($body),$auth, $headers));
        //$response = $client->request('POST', 'oauth/token',$headers, $body);
        /*
        try {
            $response = $client->request( 'POST', 'oauth/token?'.http_build_query($body),$auth, $headers);
        } catch (ClientException $e) {
            //dd($e->getRequest());
            //dd($e->getResponse());
            return back()->withInput();
        }*/

        //dd(redirect()->route('home'));

        //dd(json_decode($response->getBody()->getContents()));

    }

}
