<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function villas() {
        return $this->hasMany(Villa::class);
    }

    public function immeubles() {
        return $this->hasMany(Immeuble::class);
    }

    public function agence() { 
        return $this->belongsTo(Agence::class,'agence_id');
    }
}
