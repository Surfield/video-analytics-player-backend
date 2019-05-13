<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Elasticsearch\ClientBuilder;

class VideoEvent extends Model
{
    static function index($data){
        $client = ClientBuilder::create()->build();
        $data['@timestamp'] = time();
        $params = [
            'index' => 'my_index2',
            'type' => 'my_type',
            'id' => rand(),
            'body' => $data
        ];
        
        $response = $client->index($params);
        print_r($response);
        return($response);
    }
}
