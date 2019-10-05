<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CanthoController extends Controller
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
            "dientich" => "320 km2",
            "danso" => "1,3 triệu người",
            "gdp" => "1500 tỷ đồng"
        ];

        $info["thoitiet"] = "32 độ C";

        /**
         * trong hàm view() truyền xuống từ controller
         * tham so 1 là đường dẫn của view
         * tham số 2 là mảng truyền xuống view
         *
         * khi truyền mảng xuống view
         * thì controller sẽ giải nén tất cả các key trong mảng
         * truyền xuống thành biến
         */
        return view("cantho.tpcantho", $info);
    }


}
