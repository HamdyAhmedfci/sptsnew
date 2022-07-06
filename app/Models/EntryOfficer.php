<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryOfficer extends Model
{
    use HasFactory;
    protected $table= 'entry_officer';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId',];
}
