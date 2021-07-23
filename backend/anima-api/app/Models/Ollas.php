<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ollas extends Model
{
    use HasFactory;
    protected $connection='databasePE';
    protected $table='olla';
    protected $primaryKey = "id";
    public $timestamps=false;
}
