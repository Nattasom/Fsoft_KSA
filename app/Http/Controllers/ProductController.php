<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(Request $request)
	{
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
            $model = ucfirst($request->input("model_value"));
		}
		if(!is_null($request->input("model_text"))){
			$model_text = $request->input("model_text");
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
        $data["make_value_list"] = $this->funcLoadMakeValue();
		$data["make_value"] = $make;
        $data["model_value"] = $model;
        $data["model_text_value"] = $model_text;
        $data["model_year_value"] = $model_year;
        $data["premium_value"] = $premium_value;
		$data["car_text"] = $cartext;
        $data["premium_filter"] = $this->functGetPremiumFilter();
        $data["product_type_value"] = $productTypeVal;
		$data["product_type"] = $productType;
		$data["product_type_text"] = $productTypeText;
		$data["suminsured_filter"] = $this->functGetSumInsuredFilter();
		$data["tppd_filter"] = $this->functGetTPPDFilter();
		$data["insurer_filter"] = $this->functGetInsurerFilter();
		$data["sperate_filter"] = $this->functGetSperateFilter();
		$data['link_success'] = url("/Success");
		$data['link_detail'] = url("/Product/Detail");
		return view('pages.product', $data);
	}

	public function Detail(Request $request, $id)
	{
		if(is_null($id)){
			return redirect("/Products");
		}
		$product = $this->functGetProductDetail($id);
		$data['link_success'] = url("/Success");
		$data["detail"] = $product;
		return view("pages.product_detail", $data);
	}
	public function ajaxLoadProductList(Request $request){
		$data = $this->funcGetProductList($request->input());
		return response()->json($data);
	}
	public function TemplateCard(){
		$data['link_detail'] = url("/Product/Detail");
		return view("shared.product-card",$data);
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
	function functGetSumInsuredFilter(){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_min_max_suminsured', [
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
	function functGetTPPDFilter(){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_min_max_tppd', [
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
	function functGetInsurerFilter($lang='th'){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_insurer_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
					"lang"=>$lang
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
	function functGetSperateFilter($lang='th'){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_sperate_pay_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
					"lang"=>$lang
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
	function functGetProductDetail($id,$lang='th'){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'productdetail', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
					"idx"=>$id,
					"lang"=>$lang
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
	function funcGetProductList($params,$lang='th'){
		try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'productlist', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
					"product_type"=>$params["product_type"],
					"suminsured"=>$params["suminsured"],
					"premium"=>$params["premium"],
					"deduct_amt"=>$params["deduct"],
					"claimtype"=>$params["claim_type"],
					"insurer_code"=>$params["insurer"],
					"sperate_pay"=>$params["sperate"],
					"tppd_min"=>$params["tppd_min"],
					"tppd_max"=>$params["tppd_max"],
					"start"=>$params["start"],
					"length"=>$params["length"],
					"order_field"=>$params["order_field"],
					"order_type"=>$params["order_type"],
					"lang"=>$lang,
					"make_value"=>$params["make_value"],
					"model_value"=>$params["model_value"],
					"model_year"=>$params["model_year_value"],
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
