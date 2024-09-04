<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssuancesController extends Controller
{
    public function show($year)
    {
        return view('pages.issuancesitems.' . $year);
    }
}
