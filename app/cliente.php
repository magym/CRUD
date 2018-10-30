<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable =[
    	'nombre','rfc','telefono','email','observaciones'
    ];
}
