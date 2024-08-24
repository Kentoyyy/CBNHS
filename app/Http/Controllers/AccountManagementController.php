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
        $students = Account::where('roles', 'student')->get();
        return view('pages.admin.accountmanagement', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email|unique:accounts',
            'password' => 'required|string|confirmed',
            'learner_id' => 'required|integer|unique:accounts',
            'roles' => 'required|string',
        ]);

        $account = new Account();
        $account->username = $request->input('username');
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
            'username' => 'required|string',
            'email' => 'required|string|email|unique:accounts,email,' . $id,
            'password' => 'required|string|confirmed',
            'learner_id' => 'required|integer|unique:accounts,learner_id,' . $id,
            'roles' => 'required|string',
        ]);

        $account = Account::find($id);
        $account->username = $request->input('username');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->learner_id = $request->input('learner_id');
        $account->roles = $request->input('roles');
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account updated successfully!');
    }
}

