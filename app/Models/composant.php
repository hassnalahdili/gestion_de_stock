<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class composant extends Model
{use HasFactory;
    protected $fillable = [
        "name",
        "categorie_id",						
        "serial_number",
        "quantite",
        "prix_achat",
        "prix_vente",
        "date_achat",
        'warehouse_id',
        "image",
    ];
    public function categorie() {
    return $this->belongsTo(categorie::class);

    }
    public function warehouse() {
        return $this->belongsTo(warehouse::class);
    
        }

        public function achat() {
            return $this->hasMany(achat::class);}
            public function vente() {
                return $this->hasMany(vente::class);}
              
}
