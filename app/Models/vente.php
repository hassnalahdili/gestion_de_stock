<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    use HasFactory;
    protected $fillable = [
        "client_id",
       "composant_id",
       "quantite",
        "prix",
       "date",
];
public function client() {
    return $this->belongsTo(client::class);}
    public function composant() {
        return $this->belongsTo(composant::class);}
        public function setPrixAttribute()
        {
            $this->attributes['prix'] = $this->quantite * $this->composant->prix_vente;
        }
    
        static function getPrixAttribute($value)
        {
            return $value;
        }
}
