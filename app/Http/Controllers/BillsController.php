<?php

namespace App\Http\Controllers;
use\App\Models\Bill;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    //
    public function savebill()
    {
        dd('this is save bill funtion in bilcontroller');
    }
    public function imeidetail(Request $request)
    {




        $service = $request->serviceid; // APi Service iD
        $format = "json"; // $format = "html"; display result in JSON or HTML format
        $imei = $request->imeino; // IMEI or SERIAL Number
        $api = "E7F-HN4-W1S-U8H-TQE-M4G-BP3-LB8"; // APi Key

        $curl = curl_init ("https://sickw.com/api.php?format=$format&key=$api&imei=$imei&service=$service");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        $result = curl_exec($curl);
        curl_close($curl);

     
        // Here the result is printed
       $show= json_decode($result);

       if($show->status == "error")
       {

        return response()->json('low balance');

       }
       if($show->status == "rejected")
       {
        return response()->json('wronge imei number');
       }
       if($show->status == "success")
       {
        return response()->json('ok');
       }
       
    }

    public function newbill(Request $request)
    {

        $bill = new Bill;
        $bill->user_id = Auth()->user()->id;
        $bill->seller_name = request()->name;
        $bill->seller_address = request()->address;
        $bill->driv_licence = request()->license;
        $bill->date_of_birth = request()->dob;
        $bill->sel_sign = request()->url1;
        $bill->rep_sign = request()->url2;
        $bill->service_id = request()->mobcompany;
        if($bill->save())
        {
            return back()->with('success', 'New bill created successfull');
        }
        
    }

    // public function test()
    // {
    //     return back()->with('success', 'New bill created successfull');
        
    // }
}
