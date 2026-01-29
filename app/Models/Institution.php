<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public $timestamps = false;
    protected $fillable = ['kuccps_code', 'name', 'type', 'active', 'last_synced_at'];
    protected $casts = [
        'active' => 'boolean',
        'last_synced_at' => 'datetime',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
