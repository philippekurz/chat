<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{
    use HasFactory;
    // Autoriser les champs à être remplis en masse (protection contre les attaques mass assignment)
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
    ];
}
