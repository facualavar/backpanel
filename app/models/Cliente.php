<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ["name", "enabled"];
}
