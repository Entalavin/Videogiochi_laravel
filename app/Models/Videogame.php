<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'poster', 'description', 'developer_id', 'publisher_id', 'year'];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    public function genres()
    {   
    return $this->belongsToMany(Genre::class);
    }
}
