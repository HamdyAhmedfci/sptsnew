<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    protected $table= 'specialist';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId'];
}