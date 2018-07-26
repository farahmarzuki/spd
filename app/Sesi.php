<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table='sesi';

    protected $guarded = []; //guarded dia xlalu form ke table cthnya: verify sesuatu benda tu

    //either one; salah satu;guarded or fillable
    //yang ni yang lalu form
    //protected $fillable = ['name','status','pingat']

}
