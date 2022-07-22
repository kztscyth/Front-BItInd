<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

class LandingPageController extends Controller
{
    protected $endpoint;    
    public function __construct()
    {
        $this->endpoint = "http://10.0.62.141:8000";
    }
    public function index()
    {
        $test = $this->testConnection();

        return view('landing-page', [
            "title" => "Landing Page",
            "name" => "packages",
            "image" => "packages.jpg",
            "data" => json_decode($test['response'], true),
            "code" => $test['code']

        ]);
    }

    public function order($id = null)
    {
        $test = $this->testConnection();

        if ($test['code'] == 200) {
            $response = $this->getOrder($id);
        }
        return view('order', [
            "title" => "Order Page",
            "data" => json_decode($response['response'], true),
        ]);
    }

    public function transactionOrder(Request $request)
    {

        dd($request->all());
        return view('registerOrder', [
            "title" => "Register Page"
        ]);
    }

    protected function testConnection()
    {
        try {
            $response = Http::get($this->endpoint.'/api/landingPage');

            $data = array(
                'response' => $response->getBody(),
                'code' => 200
            );
            return $data;
        } catch (ConnectionException $e) {
            $data = array(
                'response' => $e->getMessage(),
                'code' => 500
            );
            return $data;
        }
    }

    public function getOrder($id = null)
    {
        $response = Http::get($this->endpoint . '/api/detail/' . $id);
        $data = array(
            'response' => $response->getBody(),
            'code' => 200
        );
        return $data;
    }

    public function domainCheck(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'domainInput' => 'required',
            'domainExt' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Validation Error',
                    'data' => $validator->errors(),
                    'statusCode' => 422,
                ],
                422

            );
        }


        $domain = $request->domainInput.$request->domainExt;
        $client = new Client(['base_uri' => 'https://api.apilayer.com']);

        $response = $client->request('GET', '/whois/check', [
            'query' => [
                'domain' => $domain,

            ],
            'headers' => [
                'apiKey' => 'LAriAAc8IU3L6O9FQAM1in0JTvluBnvn',
                'Content-Type' => 'text/plain'
            ]
        ]);

        $data = json_decode($response->getBody());
        if ($data->result == 'registered') {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Validation Error',
                    'data' => 'Ups Domain was Taken',
                    'statusCode' => 422,
                ],
                422

            );
        } else {
            return response()->json(
                [
                    'status' => 'Success',
                    'message' => 'Available',
                    'data' => 'Domain is ready to use',
                    'statusCode' => 200,
                ],
                200
            );
        }
        
    }
}
