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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function() {
    return "<h1>ยินดีต้อนรับสู่เว็บไซต์</h1>" ;
});

Route::get("/blog/{id}", function($id) {
        return "<h1>This is blog page : {$id} </h1>" ;
});

Route::get( "/blog/{id}/edit" , function($id) {
            return "<h1>This is blog page : {$id} for edit</h1>" ;
});

Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
});

Route::get("/category/{a?}", function($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>" ;
});

Route::get("/order/create", function() {
    return "<h1>This is order form page : ". request("username") ."</h1>" ;
});

// routes/web.php
Route::get('/greeting', function () {
    $name = 'Thanakorn';
    $last_name = 'Chulee';
    return view('greeting', compact('name','last_name') );
    
});

Route::get( "/gallery" , function(){
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");

    return view("test/index", compact("ant","bird","cat","god","spider") );
});

Route::get( "/gallery/ant" , function(){
    $ant = url("images/ant.jpg");
    return view("ant/ant",compact("ant") );
});

Route::get( "/gallery/bird" , function(){
    $bird = url("images/bird.jpg");
    return view("bird/bird", compact("bird") );
});

Route::get( "/gallery/cat" , function(){
    $cat = url("images/cat.jpg");
    return view("cat/cat", compact("cat") );
});

Route::get("/myprofile/create","MyProfileController@create");
Route::get("/myprofile/{id}/edit", "MyProfileController@edit");
Route::get("/myprofile/{id}", "MyProfileController@show");

