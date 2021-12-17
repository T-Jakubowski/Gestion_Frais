<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //protected $table = 'user';
    protected $primaryKey = 'Identifiant';
    public $incrementing = false;
    protected $connection = 'mysql';
    //protected $keyType = 'string';
}
