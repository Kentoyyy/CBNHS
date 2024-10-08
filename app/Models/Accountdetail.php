<?php
//account.php model

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class accountdetail extends Model
{
    use HasFactory;
    protected $table = 'account_details';
    protected $fillable = ['student_id', 'teacher_id', 'name', 'grade_level', 'position', 'major', 'phone_number'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
