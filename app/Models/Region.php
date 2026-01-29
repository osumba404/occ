<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false; // "rarely changes"
    protected $fillable = ['name'];

    public function counties()
    {
        return $this->hasMany(County::class);
    }
}
