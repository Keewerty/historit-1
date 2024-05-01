<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'asset_tag',
        'serial_number',
        'model',
        'status',
        'notes',
        'image',
    ];
    public function Component(){
        return $this ->hasMany(Asset::class);
    }
}

