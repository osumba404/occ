<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingStation extends Model
{
    public $timestamps = false;
    protected $fillable = ['ward_id', 'name', 'iebc_code', 'active', 'last_verified_at'];
    protected $casts = [
        'active' => 'boolean',
        'last_verified_at' => 'datetime',
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
