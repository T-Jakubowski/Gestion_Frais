<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_Frais extends Model
{
    use HasFactory;
    //protected $table = 'ligne_frais';
    protected $primaryKey = 'Identiant';
    public $incrementing = false;
    protected $connection = 'mysql';
    //protected $keyType = 'string';
}
