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
    public function update_user(Request $req)
    {
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->update();
        return back()->with('success', 'User Update Successfully');
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return back()->with('success', 'User  Delete Successfully');
    }
    
    
}
