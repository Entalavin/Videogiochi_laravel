<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'nationality'];
    public function videogames() {
        return $this->belongsToMany(Videogame::class);
    }



}
