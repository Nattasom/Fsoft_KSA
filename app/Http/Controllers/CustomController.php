<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    //
    public function Index()
	{	
        $data["premium_filter"] = $this->functGetPremiumFilter();
		$data["make_value_list"] = $this->funcLoadMakeValue();
		$data['link_submit'] = url("/Products");
		return view('pages.custom', $data);
	}
	public function ajaxLoadModel(Request $request){
		$data= array();
		if(!is_null($request->input("make"))){
			$data = $this->funcLoadModelValue($request->input("make"));
		}
		return response()->json($data);
	}
	public function ajaxLoadYearModel(Request $request){
		$data= array();
		if(!is_null($request->input("model"))){
			$data = $this->funcLoadModelYearValue($request->input("model"));
		}
		return response()->json($data);
	}

	//function
	function funcLoadMakeValue(){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_make_value_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                ]
            ]);
            if ($response->getStatusCode()==200) {
                return json_decode($response->getBody());
            }
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
                exit();
            }
        }
    }
    //function
	function functGetPremiumFilter(){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_min_max_premium', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                ]
            ]);
            if ($response->getStatusCode()==200) {
                return json_decode($response->getBody());
            }
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
                exit();
            }
        }
	}
	function funcLoadModelValue($make){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_model_value_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
					"make_value"=>$make
                ]
            ]);
            if ($response->getStatusCode()==200) {
                return json_decode($response->getBody());
            }
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
                exit();
            }
        }
	}
	function funcLoadModelYearValue($model){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_model_year_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
					"model_value"=>$model
                ]
            ]);
            if ($response->getStatusCode()==200) {
                return json_decode($response->getBody());
            }
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
                exit();
            }
        }
	}
}
