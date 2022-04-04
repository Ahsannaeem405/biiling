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
        if($request->file('image')) {
$credentialsLocation='test.json';

            // convert to base64
            $image = base64_encode(file_get_contents($request->file('image')));

            $client = new 	ImageAnnotatorClient([
    'credentials' => $credentialsLocation
]);


$annotation = $client->annotateImage(
   fopen('test.png', 'r'),
   [Type::TEXT_DETECTION]
);

        $result = $annotation;
      dd($annotation->TextAnnotation);
   
           


            preg_match_all('/(?:[0-9]{15,17})+/s', $abs, $result, PREG_PATTERN_ORDER);
            $result = $result[0];
        }
    }

}
