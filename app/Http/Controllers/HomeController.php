<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function Index(Request $request)
    {

        $data['banners'] = array();
        $data['categories'] = array();

        $data['banners'] = $this->getBanner();

        $categories = $this->getCategories();
        if (count($categories) > 0) {
            foreach ($categories as $category) {
                $cards = $this->getCardlist($category->id, 0, 3);
                // if ($cards->num_rows > 0) {
                    $category->products = $cards->list;
                // }
                $data['categories'][] = $category;
            }
        }

        $data['link_interest'] = config('app.url_api').'send_droplead'; // api send data
        $data['link_product'] = url("/Products");
        $data['link_product_detail'] = url("/Home/ProductDetail");
        $data['link_success'] = url("/Success");
        $data['link_ajax'] = url("Home/Getcards");
        return view("pages.home", $data);
    }
    public function ProductDetail(Request $request,$cat,$id)
	{
		if(is_null($id) || is_null($cat)){
			return redirect("/Home");
		}
        $product = $this->functGetProductDetail($cat,$id);
        if(!array_key_exists("MakeValue",$product)){
            return redirect("/Home");
        }
		$data['link_success'] = url("/Success");
		$data["detail"] = $product;
		return view("pages.product_detail", $data);
	}
    public function Login(Request $request)
    {   
        if ($request->method() == "POST") {
            if ($request->post('username') == 'admin' && $request->post('password') == 'P@ssw0rd') {
                $request->session()->put("userinfo","admin");
                return redirect('/Home');
            } else {
                return redirect('/');
            }
        }
        $data['link_action'] = url("/Login");
        return view("pages.login", $data);
    }

    public function SendInterest(Request $request) {
        try {
            $sendData = array();
            $sendData['name'] = $request->post('name');
            $sendData['tel'] = $request->post('tel');
            $sendData['email'] = $request->post('email');
            $callback_date = explode('/', $request->post('callback_date'));
            $sendData['callback_date'] = $callback_date[2] . '-' . $callback_date[1] . '-' . $callback_date[0];
            $sendData['callback_time'] = $request->post('callback_time');
            $sendData['remark'] = $request->post('remark');
            $sendData['make'] = $request->post('make');
            $sendData['model'] = $request->post('model');
            $sendData['motor_type'] = $request->post('motor_type');
            $sendData['seat'] = $request->post('seat');
            $sendData['cc'] = $request->post('cc');

            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'send_droplead', [
                'headers' => ['Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => $sendData
            ]);
            if ($response->getStatusCode()==200) {
                $sessiondata=array(
                    "name"=>$sendData['name'],
                    "callback_date"=> $sendData['callback_date'],
                    "callback_time"=>$sendData['callback_time']
                );
                $request->session()->put("drop_success",$sessiondata);
                return $response->getBody();
            } else {
                return json_encode(array('fail' => 'Someting has wrong ' . $response->getStatusCode()));
            }
        } catch (RequestException $e) {
            // echo Psr7\str($e->getRequest());
            // return json_encode(array('fail' => 'Someting has wrong ' . $response->getStatusCode()));
            if ($e->hasResponse()) {
                // echo Psr7\str($e->getResponse());
                return json_encode(array('fail' => 'Someting has wrong ' . Psr7\str($e->getResponse())));
            }
        }
    }

    public function Getcards(Request $request) {
        $json =  $this->getCardlist($request->post('id'), $request->post('start'), $request->post('limit'));
        return json_encode($json);
    }

    private function getBanner() {
         try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_banner', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    'lang' => 'th',
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

    private function getCategories() { 
         try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_home_cat', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    'lang' => 'th',
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

    private function getCardlist($category_id, $start = 0, $limit = 6, $lang = 'th') {
         try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_home_cat_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    'lang'   => $lang,
                    'cat_id' => (int)$category_id,
                    'start'  => $start,
                    'limit'  => $limit
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
    function functGetProductDetail($cat,$id,$lang='th'){
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'producthomedetail', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    "idx"=>$id,
                    "cat"=>$cat,
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


}
