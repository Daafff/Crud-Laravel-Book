<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['cover', 'Name', 'Description', 'Author', 'Status'];

    public function getCoverUrlAttribute()
    {
        return asset('storage/' . $this->cover);
    }
}
