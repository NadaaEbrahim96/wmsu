<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'section_id'];
}
