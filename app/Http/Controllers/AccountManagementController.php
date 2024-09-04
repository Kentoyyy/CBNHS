<?php

// AccountManagementController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AccountManagementController extends Controller
{
    public function index()
    {
        $students = Account::all();
        $teachers = Account::where('role', 'teacher')->get();
        return view('pages.admin.accountmanagement', compact('students', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|unique:accounts,email',
            'password' => 'required|string',
            'learner_id' => 'required|integer',
            'roles' => 'required|string',
        ]);

        $account = new Account();
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->learner_id = $request->input('learner_id');
        $account->roles = $request->input('roles');
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|string|email|unique:accounts,email,' . $id,
            'password' => 'required|string',
            'learner_id' => 'required|integer',
            'roles' => 'required|string',
        ]);

        $account = Account::find($id);
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->learner_id = $request->input('learner_id');
        $account->roles = $request->input('roles');
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account updated successfully!');
    }
}