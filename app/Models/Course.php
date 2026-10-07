<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Kolom yang boleh diisi massal (mass assignment protection)
    protected $fillable = ['name', 'description'];
}
