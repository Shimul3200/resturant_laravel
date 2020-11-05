<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = "galleries";
    public $primarykey = "id";
    public $timestamps = true;
}
