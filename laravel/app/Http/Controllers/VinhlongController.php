<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VinhlongController extends Controller
{
    //

    public function index() {
        /**
         * view gốc : resources/views/
         */

        // cú pháp khai báo mảng trong php 5
        $mang1 = array("a" => 1, "b" => 2);
        // cú pháp khai báo mảng trong php 7
        $mang2 = ["a" => 1, "b" => 2];

        $info = [
            "dientich" => "230 km2",
            "danso" => "1,9 triệu người",
            "gdp" => "1200 tỷ đồng"
        ];

        $info["thoitiet"] = "30 độ C";

        /**
         * trong hàm view() truyền xuống từ controller
         * tham so 1 là đường dẫn của view
         * tham số 2 là mảng truyền xuống view
         *
         * khi truyền mảng xuống view
         * thì controller sẽ giải nén tất cả các key trong mảng
         * truyền xuống thành biến
         */
        return view("vinhlong.tpvinhlong", $info);
    }

    public function index2() {

        $info = [
            "htmldemo" => "<div class='alert'>HTML DEMO</div>"
        ];
        return view("vinhlong.index2", $info);
    }
}
