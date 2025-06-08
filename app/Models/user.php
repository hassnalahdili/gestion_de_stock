<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class user extends Model
{ use HasFactory;
    public function session() {
        return $this->belongsTo(session::class);
    
        }
    
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "tele",
        "adresse",
        "session_id",
         "password",
        "image",
         ];
}
