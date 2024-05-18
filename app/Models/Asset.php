<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Asset extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'assets';
    protected $primarykey = 'id';
    protected $fillable = [
        'asset_tag',
        'serial_number',
        'model',
        'status',
        'notes',
        'image',
    ];
    public function Component()
    {
        return $this->hasMany(Asset::class);
    }
}
