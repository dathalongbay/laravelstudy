<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * truy cập vào đường dẫn gốc của ứng dụng
 */
Route::get('/', function () {
    return view('welcome');
})->middleware("checktime");

/**
 * phương thức get() là phương thức tĩnh ( static method )
 * khi gọi nó TÊN_CLASS::TÊN_PHƯƠNG_THỨC()
 *
 * phương thức get chí là phương thức sẽ điều hướng ứng dụng web
 * dừa trên url trên trình duyệt
 *
 * method get của Route sẽ có 2 tham số cần phải truyền vào
 * tham số 1 là đường dẫn sau tên miền của ứng dụng
 * tham số thứ 2 có thể là hàm không có tên để xử lý khi mà gặp đường dẫn giống với tham số 1
 * khi tham số 1 == / chúng ta đang truy cập vào trong trang chủ
 *
 * tham số thứ 2 là hàm không có tên function() { nội dung của hàm }
 */
Route::get("/haiphong", function (){
    echo "chào thành phố hải phòng";
});

Route::get("/hanoi", function() {
    echo "chào thành phố hà nội";
});

Route::get("/namdinh", function (){
    echo "chào thành phố nam định";
});

Route::get("/sapa", function (){
    echo "chào thành phố sapa";
});

/**
 * Route trả về view cụ thể
 */
Route::get("/danang", function (){
    return view("danang");
});

Route::get("/kontum", function () {
    return view("kontum");
});

Route::get("/phuyen", function (){
    return view("phuyen");
});

Route::get("/quangbinh", function (){
    return view("quangbinh");
});

Route::get("/quangnam", function (){
    return view("quangnam");
});

/**
 * Route trả view nhưng view nằm trong cấp folder con
 * đường dẫn gốc của view : resources/views/
 */

Route::get("/hanoi/hoankiem", function() {
    return view("hanoi.hoankiem");
});

Route::get("/hanoi/thanhxuan", function (){
    return view("hanoi.thanhxuan");
});

Route::get("/hanoi/longbien", function (){
    return view("hanoi.longbien");
});

/**
 * hỌc cách kết nối router với 1 controller cụ thể
 * gọi vào controller
 * TeenController@tênPhuongThuc
 *
 */

Route::get("/hochiminh", "HochiminhController@index");
Route::get("/hochiminh/quan1", "HochiminhController@quan1");
Route::get("/hochiminh/quanbinhchanh", "HochiminhController@quanbinhchanh");

/**
 * học cách kết nối route với controller
 * nhưng controller nằm trong các folder con của đường dẫn gốc controller laravel
 * gốc controller : app/Http/Controllers
 *
 */
Route::get("/china","China\BackinhController@index");

Route::get("/haiphong/quanlechan", "Mienbac\Haiphong\QuanlechanController@index");


Route::get("/cantho", "CanthoController@index");


Route::get("/vinhlong", "VinhlongController@index");

Route::get("/vinhlong/index2", "VinhlongController@index2");

/**
 * Demo cú pháp thông thường trong blade view laravel
 */
Route::get("/demoblade/if", "DemobladeController@demoif");
Route::get("/demoblade/for", "DemobladeController@demofor");
Route::get("/demoblade/foreach", "DemobladeController@demoforeach");
Route::get("/demoblade/isset", "DemobladeController@demoisset");


/**
 * kỹ thuật truyền biến từ trên thanh địa chỉ url xuống router
 */
Route::get("/truyenbien/{action}/{id}/{campaign}/{tracking}", function($action, $id, $campaign, $tracking) {

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
});

Route::get("/truyenbien2/{action}/{id?}/{campaign?}/{tracking?}", function($action, $id = 0, $campaign = "", $tracking = "") {

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

});

/**
 * truyền biến từ url cho router => controller => view
 */
Route::get("/truyenbiencontroller/{action}/{id}/{campaign}/{tracking}", "TruyenbienController@index");

Route::get("/truyenbiencontroller2/{action}/{id?}/{campaign?}/{tracking?}", "Truyenbien2Controller@index");


/**
 * master layout
 */
Route::get("demolayout/{page?}", "DemolayoutController@index");
Route::get("demolayout2/{page?}", "DemolayoutController@index2");
Route::get("demolayout3/{page?}", "DemolayoutController@index3");

