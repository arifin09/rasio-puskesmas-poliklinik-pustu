<?php

namespace App\Models\Bantenprov\RasioPusPoltu;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RasioPusPoltu extends Model 
{

    protected $table = 'rasio_puspoltus';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

}