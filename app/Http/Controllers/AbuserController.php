<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Transfer;

class AbuserController extends Controller
{
    public function index()
    {
        return view('abusers.index');
    }

    public function generateData()
    {
        return 'data generated';
    }

    public function generateReport(Request $request)
    {
       return 1;
    }
}
