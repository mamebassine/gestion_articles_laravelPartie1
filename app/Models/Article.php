<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Liste des attributs 
    protected $fillable = [ // Définit les attributs qui peuvent être assignés en masse
        'nom', 
        'description', 
        'date_creation', 
        'type', 
        'image' ];
}


