<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountManagementController extends Controller
{
    public function index()
    {
        // Fetch students and teachers separately
        $students = Account::where('roles', 'student')->paginate(10);
        $teachers = Account::where('roles', 'teacher')->paginate(10);
        return view('pages.admin.accountmanagement', compact('students', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|unique:accounts,email',
            'password' => 'required|string|min:8',
            'learner_id' => 'required|integer',
            'roles' => 'required|string|in:student,teacher',
        ]);

        $account = new Account();
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->learner_id = $request->input('learner_id');
        $account->roles = $request->input('roles');
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account created successfully!');
    }

    public function edit($id)
    {
        $account = Account::find($id);
        if (!$account) {
            return redirect()->route('accountmanagement.index')->with('error', 'Account not found.');
        }
        return view('admin.edit-account', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $account = Account::find($id);
        if (!$account) {
            return redirect()->route('accountmanagement.index')->with('error', 'Account not found.');
        }

        $request->validate([
            'email' => 'required|string|email|unique:accounts,email,' . $id,
            'password' => 'nullable|string|min:8',
            'learner_id' => 'required|integer',
            'roles' => 'required|string|in:student,teacher',
        ]);

        $account->email = $request->input('email');
        $account->learner_id = $request->input('learner_id');
        $account->roles = $request->input('roles');
        if ($request->filled('password')) {
            $account->password = bcrypt($request->input('password'));
        }
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account updated successfully!');
    }

    public function destroy($id)
    {
        $account = Account::find($id);
        if ($account) {
            $account->delete();
            return redirect()->route('accountmanagement.index')->with('success', 'Account deleted successfully!');
        }
        return redirect()->route('accountmanagement.index')->with('error', 'Account not found.');
    }
}
