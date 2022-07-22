<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    protected $endpoint;
    public function __construct()
    {
        $this->endpoint = "http://10.0.62.141:8000";
    }
    
    public function orderPackage(Request $request)
    {
        // dd($request->all());
        $request->session()->forget('order');
        $validator = Validator::make($request->all(), [
            'id_product' => 'required',
            'domainInput' => 'required',
            'domainExt' => 'required',
            'color1' => 'required',
            'color2' => 'required',
            'color3' => 'required',
            'url_reference' => 'required',
            // 'image_reference.*' => 'required',
            'bussiness_name' => 'required',
            'description_detail' =>'required'
        ])->validate();

        $request->request->add(['domain' => $request->domainInput.$request->domainExt]);
        // dd($request->all());
        $test = $this->testConnection();
        $response =null;
        if ($test['code'] == 200) {
            $response = $this->postOrder($request->all());
            $data = json_decode($response['response']);
            // dd($data->data->order_id);
            session()->put('order_id', $data->data->order_id);

            return view('/packageorder', [
                "title" => "Register"
            ]);
        }
        

        dd($response);

        

        // session(['order' => request()->all()]);
        // Session::push('order.domainInput', $request->domainInput);
        // Session::push('order.domainExt', $request->domainExt);
        // Session::push('order.exampleColorInput1', $request->exampleColorInput1);
        // Session::push('order.exampleColorInput2', $request->exampleColorInput2);
        // Session::push('order.exampleColorInput3', $request->exampleColorInput3);
        // Session::push('order.urlReference', $request->urlReference);
        // Session::push('order.fileReference', $request->fileReference);
        // Session::push('order.businessName', $request->businessName);
        // Session::push('order.descriptionDetails', $request->descriptionDetails);

        // return view('/packageorder', [
        //     "title" => "Register"
        // ]);
    }

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

    public function postOrder($data)
    {
        
        // $response = Http::post($this->endpoint . '/api/orderSection', $data);
        // dd($data['image_reference'][0]);
        // 'image', $request->file('image'), "image" . $request->file('image')->getClientOriginalExtension();
        // $file[] = array(
        //     'name' => 'image_reference.0', 
        //     'contents' => $data['image_reference'][0], 
        // );
        // array_merge($data, $file);
        
        // dd(array_merge($data, $file));
        // $response = Http::post($this->endpoint . '/api/orderSection', $data);
        // dd($response->body());

        $response = Http::post($this->endpoint . '/api/orderSection', $data);
        // $response = Http::attach(
        //     'image_reference', file_get_contents($data['image_reference'][0]), 'gambar'
        // )->post($this->endpoint . '/api/orderSection', $data);


        $data = array(
            'response' => $response->body(),
            'code' => $response->status(),
        );
        
        return $data;
    }


}
