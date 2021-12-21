<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table='Absensi';
    protected $primaryKey = 'id_absensi';
    protected $foreignKey = 'id_karyawan';
    public $timestamps=false;
}
