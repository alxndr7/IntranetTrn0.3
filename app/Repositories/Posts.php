<?php

/**
 * Created by PhpStorm.
 * User: CESAR-TRN
 * Date: 15/12/2017
 * Time: 10:10
 */
namespace  App\Repositories;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use App\Repositories\Constantes;

class Posts
{

    protected $client;
    /**
     * Posts constructor.
     */
    public function __construct(Client $client)
    {
        $this->client =  $client;
    }

    public function custom_login($user,$passw){
        $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $body = ['username'=>  $user,'password'=>$passw,'grant_type'=>'password'];
        $auth = ['auth'=> ['clientapp','transal333']];
        try{
            $response = $this->client->request( 'POST', 'oauth/token?'.http_build_query($body),$auth, $headers);
            \Cache::put('tokens', json_decode($response->getBody()->getContents()), 2000);
            $json = json_decode(json_encode(\Cache::get('tokens')),true);

            //dd( json_decode(json_encode(\Cache::get('tokens'))));

            $usuario = $this->client->request('GET','greeting',[
                'headers' => [
                    'Authorization'     => $json['token_type'].' '.$json['access_token']
                ]
            ]);
            \Cache::put('usuario',json_decode($usuario->getBody()->getContents()),2000);
           // dd( json_decode(json_encode(\Cache::get('tokens'))));

            return true;

        } catch (ClientException $e){
            //dd($e->getRequest());
            dd($e->getResponse()->getBody()->getContents());
            return false;
        }

    }

    public function get_perfil(){
        return $this->get('info_personal2');
    }

    public function get_cumples(){
        return $this->get('get_cumples');
    }

    public function vacaciones_x_personal(){
        return $this->get('vacaciones');
    }


    public function post_change_passwor($passw){
        $json = json_decode(json_encode(\Cache::get('usuario')),true);
        //dd($json);
        $body = ['id_usuario'=>$json['id_usuario'],'password'=>  $passw];
        return $this->post('up_password?'.http_build_query($body));
    }


    protected  function get($url){

        $json = json_decode(json_encode(\Cache::get('tokens')),true);
        $get_request = $this->client->request('GET',$url,[
            'headers' => [
                'Authorization'     => $json['token_type'].' '.$json['access_token']
            ]
        ]);
         return json_decode($get_request->getBody()->getContents());

    }

    protected function post($url){
        $json = json_decode(json_encode(\Cache::get('tokens')),true);
        $post_request = $this->client->request('POST',$url,[
            'headers' => [
                'Authorization'     => $json['token_type'].' '.$json['access_token']
            ]
        ]);
        return json_decode($post_request->getBody()->getContents());
    }

    /*
        $client = new GuzzleHttp\Client();
        $request = $client->createRequest('GET', '/get');
        $request->addHeader('X-Authorization', 'OAuth realm=<OAUTH STUFF HERE>');
        $resp = $client->send($request);

    */
}