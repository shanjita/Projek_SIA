<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawanhrm extends Model
{
    protected $table='karyawan';
    protected $primaryKey = 'id_karyawan';
    public $timestamps=false;
}
