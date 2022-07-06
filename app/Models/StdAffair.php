<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdAffair extends Model
{
    use HasFactory;
    protected $table= 'affair';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId',];
}
