<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function Index(Request $request)
    {   $name = "";
        $timeText = "";
        if($request->session()->exists("drop_success")){
            $session = $request->session()->get("drop_success");
            $name = $session["name"];
            $date = $session["callback_date"];
            $time = $session["callback_time"];
            $timeStart = strtotime($date." ".$time);
            $timeText = date("d M Y",$timeStart);
            $timeText .=" เวลา ".date("H:i",$timeStart)."-".(date("H:i",$timeStart+(60*60)));
            $request->session()->forget("drop_success");
        }
        else{
            return redirect("/Home");
        }
        $data["name"] = $name;
        $data["time_text"]=$timeText;
    	return view("pages.success",$data);
    }
}
