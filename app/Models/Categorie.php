<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['libelle_categorie'];

    public function idees()
    {
        return $this->hasMany(Idee::class);
    }
}
