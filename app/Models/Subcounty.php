<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcounty extends Model
{
    public $timestamps = false;
    protected $fillable = ['county_code', 'name', 'iebc_code', 'active'];

    public function county()
    {
        return $this->belongsTo(County::class, 'county_code', 'iebc_code');
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }
}
