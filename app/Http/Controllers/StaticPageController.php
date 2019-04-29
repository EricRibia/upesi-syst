<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Career;
class StaticPageController extends Controller
{
//     public function careers(){
//         // Create a client with a base URI
// $client = new Client(['base_uri' => 'https://www.fuzu.com/api/']);
// // Send a request to https://foo.com/api/test
// $res = json_decode($client->request('GET', 'company/upesi-money-transfer-limited/all_jobs')->getBody());
// // Send a request to https://foo.com/root

//         $data = [
//             "page-name" => "Careers page",
//             "jobs" => $res
//         ];
//         $info=[];
//         $info['page'] = 'Careers | Upesi money transfer';
//         $info['response'] = $res->fuzu_api;
//         return view('frontend.career',$info);
//     }
    public function careers(){
        // Create a client with a base URI
$client = new Client(['base_uri' => 'https://www.fuzu.com/api/']);
// Send a request to https://foo.com/api/test
$res = json_decode($client->request('GET', 'company/upesi-money-transfer-limited/all_jobs')->getBody());
// Send a request to https://foo.com/root

        $data = [
            "page-name" => "Careers page",
            "jobs" => $res
        ];
        $info=[];
        $info['page'] = 'Careers | Upesi money transfer';
        $info['response'] = Career::all();
        return view('frontend.career',$info);
    }
}
