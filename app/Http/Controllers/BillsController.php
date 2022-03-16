<?php

namespace App\Http\Controllers;

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
        $api = "87R-C2G-K7J-UP5-34O-MCZ-6AX-NQ5"; // APi Key

        $curl = curl_init ("https://sickw.com/api.php?format=$format&key=$api&imei=$imei&service=$service");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        $result = curl_exec($curl);
        curl_close($curl);

     
        // Here the result is printed
       $show= json_decode($result);

       if($show->status != "error")
       {

        return response()->json($result);

       }
       else 
       {
        return response('status is error');
       }
    }

    public function newbill()
    {
        dd('ddldldldld');
    }
}
