<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenewController extends Controller
{
    public function Index()
    {
    	$data['action'] = url("/Vertificate");
        $data['custom'] = url('/Custom');
    	return view("pages.renew", $data);
    }

    public function Success()
    {
        $data['link'] = '#';
        return view("pages.renewsuccess", $data);
    }

}
