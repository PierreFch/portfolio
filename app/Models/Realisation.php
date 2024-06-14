<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Realisation extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'categorie',
        'localisation',
        'annee',
        'duree',
        'titre',
        'image',
        'contexte-objectif',
        'participation-individuelle',
        'analyse-critique',
        'resultats',
        'images'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
