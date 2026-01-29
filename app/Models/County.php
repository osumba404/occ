<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public $timestamps = false;
    protected $fillable = ['region_id', 'name', 'iebc_code', 'active'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function subcounties()
    {
        return $this->hasMany(Subcounty::class);
    }
}
