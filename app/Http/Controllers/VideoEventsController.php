<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Elasticsearch\ClientBuilder;

class VideoEventsController extends Controller
{
    //
    public function searchIndex(Request $request){
        $data = $request->all();
        $client = ClientBuilder::create()->build();
        $data['@timestamp'] = time();
        $params = [
            'index' => 'main',
            'type' => 'my_type',
            'id' => rand(),
            'body' => $data
        ];
        
        $response = $client->index($params);
        print_r($response);
        return($response);
    }
}
