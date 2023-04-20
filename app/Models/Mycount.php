<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mycount extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'email'];
    protected $guarded = [];
    protected $table = 'users';
}
