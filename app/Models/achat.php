<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    use HasFactory;
    protected $fillable = [
            "fournisseur_id",
           "composant_id",
           "quantite",
           "prix",
            "date",
    ];
    public function fournisseur() {
        return $this->belongsTo(fournisseur::class);}
        public function composant() {
            return $this->belongsTo(composant::class);}
           public function setPrixAttribute()
    {
        $this->attributes['prix'] = $this->quantite * $this->composant->prix_achat;
    }

    static function getPrixAttribute($value)
    {
        return $value;
    }
        
   
        
}
