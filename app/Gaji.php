<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $table='gaji';
    protected $primaryKey = 'id_gaji';
    protected $foreignKey = 'id_karyawan';
    public $timestamps=false;
}
