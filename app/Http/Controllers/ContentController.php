<?php

namespace App\Http\Controllers;

use Validator;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContentController extends Controller
{
    public function Index(){
        $data["contents"] = $this->getContentList(0,6);
        return view("pages.content",$data);
    }
    public function ajaxGetMoreContent(Request $request){
        $data = $this->getContentList($request->input("start"),$request->input("length"));
        return response()->json($data);
    }
    public function Detail($id)
    {
        $detail = $this->getContent($id);
        if(!property_exists($detail,"ContentID")){
            return redirect("/Home");
        }
        $data["detail"] = $detail;
        $data["list"] = $this->getContentList();
    	return view("pages.content-detail",$data);
    }


    //call api
    private function getContentList($start=0,$length=4){
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_content_list', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    'lang' => 'th',
                    'start'=> $start,
                    'length'=> $length
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
    private function getContent($id) {
         try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', config('app.url_api').'get_content_detail', [
                'headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/x-www-form-urlencoded' ],
                'form_params' => [
                    'lang' => 'th',
                    'id'=>$id
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
