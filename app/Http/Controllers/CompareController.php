<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function Index(Request $request)
	{
		$data['compare_list'] = array();
		$compareLists = json_decode($request->session()->get("compare_list"));
		if (count($compareLists) > 0) {
			foreach ($compareLists as $key => $list) {
				$json = json_decode(urldecode($list));
                // echo '<pre>';
                // print_r($json);
                // echo '</pre>';
                // exit();
                $json->InsurerName = isset($json->InsurerName) ? $json->InsurerName : $json->CatProductName;    
                $json->CatProductName = isset($json->CatProductName) ? $json->CatProductName : $json->InsurerName;
                $data['compare_list'][$key] = $json;
			}
		} else {
            $request->session()->forget('compare_list');
            return redirect('/Home');
        }
        // exit();

		$data['link_product_detail'] = url("/Product/Detail");
		$data['category_id'] = '1';

		return view('pages.compare', $data);
	}

	public function AddCompare(Request $request) 
	{
		$json = array('status' => 0);
        if ($request->method() == "POST") {
            // print_r($request->post('listid'));
            $json['post'] = $request->post('listid');
            if (!empty($request->post('listid'))) {
            	$request->session()->forget('compare_list');
            	$request->session()->put("compare_list", $request->post('listid'));
            	$json['status'] = 1;
            }
        }
        return json_encode($json);
	}

    public function RemoveCompare(Request $request, $id) 
    {
        if (!empty($id)) {
            $compareLists = json_decode($request->session()->get("compare_list"));
            if (count($compareLists) > 0) {
                $newCompare = array();
                foreach ($compareLists as $list) {
                    $json = json_decode($list);
                    if ($json->idx != $id) {
                        $newCompare[] = $list;    
                    }
                }
                $request->session()->forget('compare_list');
                $request->session()->put("compare_list", json_encode($newCompare));
            }
            return redirect('/Compare');
        } else {
            return redirect('/Compare');
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
}
