<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AccountManagementController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accountmanagement', compact('accounts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email|unique:accounts',
            'password' => 'required|string|confirmed',
        ]);

        $account = new Account();
        $account->username = $request->input('username');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email|unique:accounts,email,' . $id,
            'password' => 'required|string|confirmed',
        ]);

        $account = Account::find($id);
        $account->username = $request->input('username');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));
        $account->save();

        return redirect()->route('accountmanagement.index')->with('success', 'Account updated successfully!');
    }

    public function destroy($id)
    {
        $account = Account::find($id);
        $account->delete();

        return redirect()->route('accountmanagement.index')->with('success', 'Account deleted successfully!');
    }
}