<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    //
    protected $fillable = ['make', 'model', 'produced_on'];
}
