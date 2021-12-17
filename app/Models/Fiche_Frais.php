<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_Frais extends Model
{
    use HasFactory;
    //protected $table = 'fiche_frais';
    protected $primaryKey = 'Num';
    public $incrementing = false;
    protected $connection = 'mysql';
    //protected $keyType = 'string';
}
