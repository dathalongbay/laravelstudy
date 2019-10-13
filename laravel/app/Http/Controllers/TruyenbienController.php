<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruyenbienController extends Controller
{
    //

    public function index($action, $id, $campaign, $tracking) {

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

        return view("truyenbien", $dataView);
    }
}
