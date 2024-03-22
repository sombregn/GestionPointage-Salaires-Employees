<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'cni', 'horaire_debut_travail', 'horaire_fin_travail', 'email', 'qr_code', 'cjm', 'status', 'email', 'password'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relation avec les pointages
    public function pointages()
    {
        return $this->hasMany(Pointage::class);
    }
    // Relation avec les paiements
    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}
