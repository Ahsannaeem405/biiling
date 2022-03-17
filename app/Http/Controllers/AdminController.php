<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class AdminController extends Controller
{
    //


    public function index()
    {
        $bills = Bill::all();
        return view('admin.index', compact('bills'));
    }
    public function user()
    {
        return view('admin.user');
    }

    public function sells()
    {
        return view('admin.sells');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
