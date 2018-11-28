<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function Index()
    {
    	$data['action'] = url("/Vertificate");
    	return view("pages.signin", $data);
    }

    public function Vertificate(Request $request)
    {
    	$data['action'] = url("/Renew");
    	$data['license'] = $request['license'];
    	return view("pages.vertificate", $data);
    }
}
