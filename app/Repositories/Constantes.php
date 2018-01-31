<?php
/**
 * Created by PhpStorm.
 * User: CESAR-TRN
 * Date: 15/12/2017
 * Time: 12:59
 */

namespace App\Repositories;


class Constantes
{
    private $id_usuario;
    private $token;
    private $toke_type;

    /**
     * Constantes constructor.
     * @param $id_usuario
     */
    public function __construct()
    {
        $json = json_decode(json_encode(\Cache::get('usuario')),true);
        $json_tokens = json_decode(json_encode(\Cache::get('tokens')),true);

        $this->id_usuario = $json['id_usuario'];
        $this->token = $json_tokens['access_token'];
        $this->toke_type = $json_tokens['token_type'];
    }


    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getTokeType()
    {
        return $this->toke_type;
    }

}