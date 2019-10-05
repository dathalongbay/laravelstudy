<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemobladeController extends Controller
{
    //

    public function demofor() {
        return view("demoblade.for");
    }


    public function demoif() {
        return view("demoblade.if");
    }


    public function demoforeach() {
        return view("demoblade.foreach");
    }

    public function demoisset() {
        return view("demoblade.isset");
    }
}
