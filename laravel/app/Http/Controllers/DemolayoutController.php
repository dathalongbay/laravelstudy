<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemolayoutController extends Controller
{
    //

    public function index($page = "homepage") {

        $pathView = "demolayout.subview.".$page;

        return view($pathView);
    }

    public function index2() {

        return view("demolayout.subview.homepage2");
    }

    public function index3() {

        return view("demolayout.subview.homepage3");
    }
}
