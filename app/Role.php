<?php
/**
 * Created by PhpStorm.
 * User: CESAR-TRN
 * Date: 10/01/2018
 * Time: 16:44
 */

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_rol';
    protected $primaryKey='rol_id';


}