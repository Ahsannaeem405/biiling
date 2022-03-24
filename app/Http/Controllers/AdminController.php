<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\User;

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
        $users = User::where('role', '2')->get();
        return view('admin.user', compact('users'));
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
