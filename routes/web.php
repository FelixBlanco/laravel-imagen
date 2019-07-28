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

    $a = array('00.png');

    for ($i=0; $i <= 36; $i++) {
        if($i < 10){
            $img = '0'.$i;
        }else{
            $img = $i;
        } 
        array_push($a, $img.'.png');
    }        

    foreach($a as $as){
        $img = Image::make($as)->resize(100, 100);
        $img->save("img/$as",80);
    }

    return 'Listo';
});
