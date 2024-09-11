<?php
//account.php model

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountDetail extends Model
{
    protected $fillable = ['student_id', 'teacher_id', 'name', 'grade_level', 'grades', 'position', 'major', 'phone_number'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
