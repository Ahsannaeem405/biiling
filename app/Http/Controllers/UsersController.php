<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Validation\ValidationException;
use App\Models\Bill;
use App\Models\User;
use App\Models\Mobilecompanie;
use thiagoalessio\TesseractOCR\TesseractOCR;
use File;

use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Likelihood;

class UsersController extends Controller
{
    public function index()
    {
//         $tes=public_path('img/test.jpeg');
//         $abs= (new TesseractOCR($tes))
//     ->run();




// preg_match_all('/(?:[0-9]{15,17})+/s', $abs, $result, PREG_PATTERN_ORDER);
// $result = $result[0];
// echo $abs."<br>";
// dd($result);
         
        // dd('this is user');
        $userid = Auth()->user()->id;
        $bills = Bill::where('user_id', $userid)->get();
        $companies = Mobilecompanie::all();
        return view('user.index', compact('bills', 'companies'));
    }


    public function createbill()
    {

        return view('user.allbill');

    }
    public function print($id)
    {

        $bill = Bill::find($id);
        
        return view('user.print', compact('bill'));

    }
     public function scan_img(Request $req)
    {
          

        $image =file_get_contents($req->img);
        file_put_contents(public_path("img/".time() . "_."."png"), $image);
        $cover_img_get="img/".time() . "_."."png";
        $tes=public_path($cover_img_get);

        $credentialsLocation='test.json';

        // convert to base64

        $client = new 	ImageAnnotatorClient([
            'credentials' => $credentialsLocation
        ]);


        $annotation = $client->annotateImage(
        fopen($tes, 'r'),
        [Type::TEXT_DETECTION]
        );


      $res=$annotation->getFullTextAnnotation();
      $result = $res->getText();

   
      preg_match_all('/(?:[0-9]{15,17})+/s', $result, $resul, PREG_PATTERN_ORDER);
      $resul = $resul[0];



        





        
        //echo $abs."<br>";

        return response()->json(['msg'=>$resul]);
        
       

    }


    

    
    //

    // public function register(){
    //     return view('user.register');
    // }

    // public function adduser(){

    //     $attributes = request()->validate([
    //         'username' => 'required|max:255|min:3|unique:users,username',
    //         'email' => 'required|min:3|unique:users,email',
    //         'password' => 'required|min:8|max:10' 
    //     ]);

    //     $user = new User;
    //     $user->username = request()->username;
    //     $user->email = request()->email;
    //     $user->password = Hash::make(request()->password);
    //     $user->save();
    //     auth()->login($user);
    //     return redirect('/user/dashboard');


    //         // session()->flash;
    //     // return view('user.dashboard');

    // }

    // public function dashboard(){

    //     // dd('this is bashboard');
    //     return view('user.dashboard');
    // }

    // public function login(){

    //     $userdata = request()->validate([
    //         'email' => 'required|exists:users,email',
    //         'password' => 'required' 
    //     ]);


    //     if(auth()->attempt($userdata)) {
            
    //         return view('user.dashboard')->with('success', 'Welcome back!');

    //     }

    //     throw ValidationException::withMessages([
    //         'password' => 'please correct your password first.'
    //     ]);

    // }

    // public function logout(){
    //     dd('logout');   

    //     auth()->logout();
    //     return redirect('/')->with('success', 'allah haffiz');
    // }

}
