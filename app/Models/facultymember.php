<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyMember extends Model
{
    protected $fillable = ['name', 'position', 'description', 'image'];
}