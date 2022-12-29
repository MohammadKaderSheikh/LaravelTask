<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resistration extends Model
{
    use HasFactory;
    
    protected $table ="resistration";
    protected $primaryKey ="id";
    public $incrementing = true;
    protected $keyType = "int";
    public $timestamps = false;
}
