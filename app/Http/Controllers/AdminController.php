<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function index()
    {
        return view('admin.index');
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
