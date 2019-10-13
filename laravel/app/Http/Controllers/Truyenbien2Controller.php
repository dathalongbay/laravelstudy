<?php

namespace App\Http\Controllers;

use App\Http\Middleware\EncryptCookies;
use Illuminate\Http\Request;

class Truyenbien2Controller extends Controller
{
    //

    public function index($action, $id = 0, $campaign = "", $tracking = "") {

        echo "<br>" . __METHOD__;

        echo "<br> action : " . $action;
        echo "<br> id : " . $id;
        echo "<br> campaign : " . $campaign;
        echo "<br> tracking : " . $tracking;

        $dataView = [
            "action" => $action,
            "id" => $id,
            "campaign" => $campaign,
            "tracking" => $tracking,
        ];

        return view("truyenbien2", $dataView);
    }
}
