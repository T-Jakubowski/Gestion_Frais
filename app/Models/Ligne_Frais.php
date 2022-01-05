<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_Frais extends Model
{
    use HasFactory;
    protected $table = 'ligne_frais';
    protected $primaryKey = 'Num';
    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = 'int';
}
