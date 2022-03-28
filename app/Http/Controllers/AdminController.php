<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Mobilecompanie;
use Illuminate\Support\Facades\Hash;
use Auth;

use App\Models\User;

class AdminController extends Controller
{
    //


    public function index()
    {


        $bills = Bill::all();
        $companies = Mobilecompanie::all();
        return view('admin.index', compact('bills', 'companies'));
    }
    public function user()
    {
        $users = User::where('role', '2')->get();
        return view('admin.user', compact('users'));
    }

    public function sells()
    {
        $bills = Bill::all();
        $companies = Mobilecompanie::all();
        return view('admin.sells', compact('bills', 'companies'));
    }

    public function settings()
    {
        return view('admin.settings');
    }
    public function update_user(Request $req)
    {
        $req->validate([
          
            'name'   => 'required',
            'email' => 'unique:users,email,'.$req->id
            
           

        ]);
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->update();
        return back()->with('success', 'User Update Successfully');
    }
    public function update_admin(Request $req)
    {
        $req->validate([
          
            'name'   => 'required',
            'email' => 'unique:users,email,'.$req->id
            
           

        ]);
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->comp_name = $req->comp_name;
        if ($req->hasFile('file')) {
            $file      = $req->file('file');
            $extension = $req->file->extension();
            $fileName  = time() . "_." . $extension;
            $req->file->move('upload/images/', $fileName);
            $data->comp_logo = $fileName;
        }

        $data->update();
        return back()->with('success', 'User Update Successfully');
    }
    public function add_user(Request $req)
    {
        $req->validate([
            'name'   => 'required',
            'email'    => 'required | unique:users',
            'password' => 'required|confirmed',
           

        ]);
        $data =new User();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->input('password'));
        $data->role =2;

        $data->save();
        return back()->with('success', 'User Successfully Add');
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return back()->with('success', 'User  Delete Successfully');
    }
    public function change_password(Request $request)
    {

        $user = User::find(Auth::user()->id);
       
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }
        else{
           
            $validated = $request->validate([
                'password' => 'required|confirmed|min:6'
               
                ]);
            
            $users = User::find(Auth::user()->id);
            $users->password = Hash::make($request->password);
            $users->save();
           

            return back()->with('success', 'Password successfully changed!');
        }
    }
    
}
