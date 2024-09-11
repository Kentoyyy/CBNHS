<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['learner_id', 'email', 'password'];

    public function details()
    {
        return $this->hasOne(AccountDetail::class, 'student_id');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
