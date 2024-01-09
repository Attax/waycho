<?php

namespace app\controller;

use support\Request;

class CarrierController
{
    public function index(Request $request)
    {
        return view('tracking/index', ['name' => 'webman']);
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
