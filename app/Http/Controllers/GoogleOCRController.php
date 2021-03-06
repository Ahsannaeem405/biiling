<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Likelihood;



class GoogleOCRController extends Controller
{
    public function index()
    {
        return view('googleOcr');
    }

    /**
     * handle the image
     *
     * @param
     * @return void
     */
    public function submit(Request $request)
    {
        
$credentialsLocation='test.json';

            // convert to base64
             
        $image =file_get_contents($request->image);
        file_put_contents(public_path("img/".time() . "_."."png"), $image);
        $cover_img_get="img/".time() . "_."."png";
        $tes=public_path($cover_img_get);

            $client = new 	ImageAnnotatorClient([
    'credentials' => $credentialsLocation
]);


$annotation = $client->annotateImage(
   fopen($tes, 'r'),
   [Type::TEXT_DETECTION]
);
        dd($annotation);


      $res=$annotation->getFullTextAnnotation();
      $result = $res->getText();

    //   $subject="aa999999999999999aa888888888888888as555555ssd555fs22aa999999999999999a";
      preg_match_all('/(?:[0-9]{15,17})+/s', $result, $resul, PREG_PATTERN_ORDER);
      $resul = $resul[0];

    //  $array = explode('\n', $result);
dd($resul);

            // preg_match_all('/(?:[0-9]{15,17})+/s', $abs, $result, PREG_PATTERN_ORDER);
            // $result = $result[0];
        }
    

}
