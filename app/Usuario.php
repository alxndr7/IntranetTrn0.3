<?php
/**
 * Created by PhpStorm.
 * User: CESAR-TRN
 * Date: 10/01/2018
 * Time: 16:44
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_usuario';
    protected $primaryKey='usuario_id';

    protected $fillable = [
        'usuario_id', 'usu_usuario',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

}