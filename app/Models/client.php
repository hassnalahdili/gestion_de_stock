<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "tele",
        "adresse",
        ];
        public function vente() {
            return $this->hasMany(vente::class);}
}
