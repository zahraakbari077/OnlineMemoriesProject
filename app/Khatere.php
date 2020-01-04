<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khatere extends Model
{
    protected $table = "dairies";
    protected $fillable = ["title","body","created_at"];
}
