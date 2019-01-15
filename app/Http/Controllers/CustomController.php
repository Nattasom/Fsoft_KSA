<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    //
    public function Index(Request $request)
	{	
        if($request->isMethod('post')){ //is post
            $make = "";
            $model = "";
            $model_text ="";
            $model_year = "";
            $premium_value = 0;
            $productType = array();
            $productTypeVal = "";
            $productTypeText = "1 / 2+ / 2 / 3+ / 3";
            $cartext = "";
            if(!is_null($request->input("make_value"))){
                $make = $request->input("make_value");
                $cartext .="".ucfirst($make);
            }
            if(!is_null($request->input("model_value"))){
                $model = $request->input("model_value");
                $cartext .=" / ".ucfirst($model);
            }
            if(!is_null($request->input("model_text"))){
                $model_text = trim($request->input("model_text"));
                $cartext .=" / ".ucfirst($model_text);
            }
            if(!is_null($request->input("year_value"))){
                $model_year = $request->input("year_value");
                $cartext .=" / ".$model_year;
            }
            if(!is_null($request->input("premium_value"))){
                $premium_value = $request->input("premium_value");
            }
            if(!is_null($request->input("product_type"))){
                $arrProd = explode(',',$request->input("product_type"));
                $productTypeText = "";
                foreach($arrProd as $k=>$v){
                    if($k!=0){
                        $productTypeText .=" / ";
                    }
                    $productTypeText .= $v;
                }
                $productType = $arrProd;
                $productTypeVal = $request->input("product_type");
            }
            $advancedSearch = array(
                "product_type"=>$productTypeVal,
                "suminsured"=>'',
                "premium"=>$premium_value,
                "deduct"=>'',
                "claim_type"=>'',
                "insurer"=>'',
                "sperate"=>'',
                "tppd_min"=>'',
                "tppd_max"=>'',
                "make_value"=>$make,
                "model_value"=>$model,
                "model_year_value"=>$model_year,
                "model_description"=>$model_text,
            );
            $request->session()->put('car_filter',$advancedSearch);
            return redirect("/Products");
        }
        //$request->session()->forget('search_car');
        $data["premium_filter"] = $this->functGetPremiumFilter();
		$data["make_value_list"] = $this->funcLoadMakeValue();
        $data['link_submit'] = url("/Custom");
        $tmp_search = array(
            "product_type"=>'',
            "suminsured"=>'',
            "premium"=>'',
            "deduct"=>'',
            "claim_type"=>'',
            "insurer"=>'',
            "sperate"=>'',
            "tppd_min"=>'',
            "tppd_max"=>'',
            "make_value"=>'',
            "model_value"=>'',
            "model_year_value"=>'',
            "model_description"=>'',
        );
        if ($request->session()->exists('car_filter')) {
            $tmp_search = $request->session()->get("car_filter");
        }
        $data['car_filter'] = $tmp_search;
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
    public function ajaxSubModelValue(Request $request){
		$data= array();
		if(!is_null($request->input("model"))){
			$data = $this->funcLoadSubModelValue($request->input("model"),$request->input("year"));
		}
		return response()->json($data);
    }
    public function ajaxGetPremiumRangeValue(Request $request){
		$data= array();
		$data = $this->funcLoadPremiumRange($request->input());
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
    function funcLoadSubModelValue($model,$year){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_sub_model_value_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    "model_value"=>$model,
                    "year"=>$year
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
    function funcLoadPremiumRange($params = array()){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_min_max_premium_producttype', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    "make_value"=>$params["make_value"],
                    "model_value"=>$params["model_value"],
                    "model_description"=>$params["model_description"]
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
