<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_Frais extends Model
{
    use HasFactory;
    protected $table = 'fiche_frais';
    protected $primaryKey = ['Date', 'Identifiant'];
    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = ['date', 'String'];

    public function Ligne_Frais()
    {
        return $this->hasMany(Ligne_Frais::class, 'Date', 'Date');
    }
}
