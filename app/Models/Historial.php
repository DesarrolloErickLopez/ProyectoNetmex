<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    // protected $fillable = ['ID'];
    protected $guarded = [];
    protected $table = 'historial';
}
