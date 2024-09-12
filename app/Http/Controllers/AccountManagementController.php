<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accountdetail;
use App\Models\Student;
use App\Models\Teacher;

class AccountManagementController extends Controller
{
    public function index()
    {
        // Fetch students with their account details
        $students = Student::with('accountdetail')->paginate(10);

        // Fetch teachers with their account details
        $teachers = Teacher::with('accountdetail')->paginate(10);

        return view('pages.admin.accountmanagement', compact('students', 'teachers'));
    }

    public function createStudent()
    {
        return view('pages.admin.edit.create-student');
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'learner_id' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $student = Student::create([
            'learner_id' => $request->input('learner_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Accountdetail::create([
            'student_id' => $student->id,
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return redirect()->route('accountmanagement.index')->with('success', 'Student added successfully!');
    }

    public function createTeacher()
    {
        return view('pages.admin.edit.create-teacher');
    }

    public function storeTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers',
            'teacher_id' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $teacher = Teacher::create([
            'teacher_id' => $request->input('teacher_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Accountdetail::create([
            'teacher_id' => $teacher->id,
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return redirect()->route('accountmanagement.index')->with('success', 'Teacher added successfully!');
    }

    public function edit($id)
    {
        // Check if the account belongs to a student
        $student = Student::with('accountdetail')->find($id);
        if ($student) {
            return view('pages.admin.edit.edit-student-account', [
                'student' => $student,
                'accountDetail' => $student->accountdetail
            ]);
        }

        // Check if the account belongs to a teacher
        $teacher = Teacher::with('accountdetail')->find($id);
        if ($teacher) {
            return view('pages.admin.edit.edit-teacher-account', [
                'teacher' => $teacher,
                'accountDetail' => $teacher->accountdetail
            ]);
        }

        return redirect()->route('accountmanagement.index')->with('error', 'Account not found.');
    }

    public function update(Request $request, $id)
    {
        // Find the student
        $student = Student::find($id);
        if ($student) {
            // Validate input
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:students,email,' . $id,
                'password' => 'nullable|string|min:8',
                'phone_number' => 'required|string|max:15',
            ]);

            // Update student details
            $student->email = $request->input('email');
            if ($request->filled('password')) {
                $student->password = bcrypt($request->input('password'));
            }
            $student->save();

            // Update account details
            $accountDetail = Accountdetail::where('student_id', $id)->first();
            if ($accountDetail) {
                $accountDetail->name = $request->input('name');
                $accountDetail->phone_number = $request->input('phone_number');
                $accountDetail->save();
            }

            return redirect()->route('accountmanagement.index')->with('success', 'Student account updated successfully!');
        }

        // Find the teacher
        $teacher = Teacher::find($id);
        if ($teacher) {
            // Validate input
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:teachers,email,' . $id,
                'password' => 'nullable|string|min:8',
                'phone_number' => 'required|string|max:15',
                'position' => 'nullable|string',
                'major' => 'nullable|string',
            ]);

            // Update teacher details
            $teacher->email = $request->input('email');
            if ($request->filled('password')) {
                $teacher->password = bcrypt($request->input('password'));
            }
            $teacher->save();

            // Update account details
            $accountDetail = Accountdetail::where('teacher_id', $id)->first();
            if ($accountDetail) {
                $accountDetail->name = $request->input('name');
                $accountDetail->phone_number = $request->input('phone_number');
                $accountDetail->position = $request->input('position');
                $accountDetail->major = $request->input('major');
                $accountDetail->save();
            }

            return redirect()->route('accountmanagement.index')->with('success', 'Teacher account updated successfully!');
        }

        return redirect()->route('accountmanagement.index')->with('error', 'Account not found.');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $teacher = Teacher::find($id);

        if ($student) {
            $student->delete();
            return redirect()->route('accountmanagement.index')->with('success', 'Student account deleted successfully!');
        } elseif ($teacher) {
            $teacher->delete();
            return redirect()->route('accountmanagement.index')->with('success', 'Teacher account deleted successfully!');
        }

        return redirect()->route('accountmanagement.index')->with('error', 'Account not found.');
    }
}
