<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lisences extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function Lisences(){
        return $this ->hasMany(Lisences::class);
    }
}
