<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    use HasFactory;
    protected $fillable = [
        'personnel_id', 'date', 'heure_arrivee', 'heure_depart',
    ];

    // Relation avec le personnel
    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }
}
