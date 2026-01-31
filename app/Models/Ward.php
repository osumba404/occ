<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    public $timestamps = false;
    protected $fillable = ['subcounty_code', 'name', 'iebc_code', 'active'];

    public function subcounty()
    {
        return $this->belongsTo(Subcounty::class, 'subcounty_code', 'iebc_code');
    }

    public function pollingStations()
    {
        return $this->hasMany(PollingStation::class);
    }
}
