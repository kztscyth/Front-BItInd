<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $endpoint;
    public function __construct()
    {
        $this->endpoint = "http://192.168.100.19:80";
    }

    //end endpoint

    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'bussiness_name' => 'required',
            'id_country' => 'required',
            'id_city' => 'required',
            'phone_number' => 'required',
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

        $test = $this->testConnection();

        if ($test['code'] == 200) {
            $response = $this->postRegister($request->all());
        }

        return $response['response'];
    }

    //end register

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'emailLogin'    => 'required|email',
            'passwordLogin' => 'required|string|min:6',
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
        $test = $this->testConnection();

        if ($test['code'] == 200) {
            $response = $this->postLogin($request->all());
        }

        return view('/landing-page', [
            "title" => "Landing-page"
        ]);

    }
    
    //end login

    public function verifyCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric|digits_between:1,2',
            'email_code' => 'required|numeric|digits:6',
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
        $test = $this->testConnection();

        if ($test['code'] == 200) {
            $response = $this->postCode($request->all());
        }

        return view('/payment', [
            "title" => "Payment"
        ]);
        
    }

    //end VerifEMail code

    public function resendCode()
    {
        $test = $this->testConnection();

        if ($test['code'] == 200) {
            $response = $this->postResend();
        }

        return $response;
    }

    //end resend




    protected function testConnection()
    {
        try {
            $response = Http::get($this->endpoint . '/api/landingPage');

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

    //end testConnection

    public function postRegister($data)
    {
        $response = Http::post($this->endpoint . '/api/auth/register', $data);
        $decodeResponseJWT = json_decode($response->getBody());
        if ($decodeResponseJWT->status == 'error') {
            $data = array(
                'response' => $response->getBody(),
                'statusCode' => 422
            );
            return $data;
        }

        $token = $decodeResponseJWT->data->token;

        $tokenParts = explode(".", $token);  
        $tokenHeader = base64_decode($tokenParts[0]);
        $tokenPayload = base64_decode($tokenParts[1]);
        $jwtHeader = json_decode($tokenHeader);
        $jwtPayload = json_decode($tokenPayload);
        $id = array('userid' => $jwtPayload->sub, );

        session()->put('order.userid', $jwtPayload->sub);
        session()->put('order.order_id', session()->get('order_id'));
        $dataOrder = session('order');
        // dd($dataOrder);
        $response = Http::put($this->endpoint . '/api/updateData/12', $dataOrder);
       
        // $decodeResponse = json_decode($response->body());
        // if ($decodeResponse->status == 'error') {
        //     $data = array(
        //         'response' => $response->getBody(),
        //         'statusCode' => 422
        //     );
        //     return $data;
        // }


        session()->forget('token');
        Session::push('token', $token);
        $data = array(
            'response' => $token,
            'code' => 200
        );
        return $data;
    }

    //end post register

    public function postCode($data)
    {
        $response = Http::post($this->endpoint . '/api/auth/verifyCode', $data);
        $data = array(
            'response' => $response->getBody(),
            'code' => 200
        );
        return $data;
    }
    //end post Code


    public function postResend()
    {
        $token = session('token');
        $response = Http::withToken($token[0])->get($this->endpoint . '/api/email/resend');
        
        $data = array(
            'response' => $response->getBody(),
            'code' => 200
        );
        return $data;
    }

    //end post resend

    public function postLogin($data)
    {
        
        $response = Http::post($this->endpoint . '/api/auth/login', $data);
        
        $data = array(
            'response' => $response->getBody(),
            'code' => 200
        );
        return $data;
    }
    //end post login


   
}
