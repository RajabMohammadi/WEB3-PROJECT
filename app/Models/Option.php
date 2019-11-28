<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = "project_option";
    protected $primaryKey = "option_id";
    public $timestamps = false;

}
