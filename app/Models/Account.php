<?php
//account.php model

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['email', 'password', 'learner_id', 'roles'];

    protected $hidden = [
        'password',
    ];



    // Automatically hash the password when setting it
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
