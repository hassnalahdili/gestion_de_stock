<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "tele",
        "adresse",
        ];
        public function achat() {
            return $this->hasMany(achat::class);}

}
