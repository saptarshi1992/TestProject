<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return response('<h1>hello world</h1>', 200)
        ->header('content-type', 'text/palin')
        ->header('saptarshi', 'chakraborty');
});

Route::get('/post/{id}', function ($id) {
    // dd($id);
    return response('post' . $id);

})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    dd($request);
});


Route::get('/', function () {
    return view('listings', [
        'heading' => 'listings heading',
        'details' => [
            [
                'id' => 1,
                'name' => 'This is sample article 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas blandit lobortis. Ut sed posuere lectus. Donec consequat felis ex, et sagittis nisl congue a. Donec ipsum risus, dictum in justo sit amet, vulputate pharetra ante. Pellentesque et leo a sapien accumsan iaculis. Fusce malesuada eros arcu, fermentum imperdiet ipsum bibendum vel. Nam porttitor dignissim arcu id commodo. Nulla at ex aliquet, sodales erat nec, aliquet erat. Curabitur sodales ultrices convallis.'
            ],
            [
                'id' => 2,
                'name' => 'This is sample article 2',
                'description' => 'Lorem ipsum dolor sit amet,
                 consectetur adipiscing elit. Donec egestas blandit lobortis.
                  Ut sed posuere lectus. Donec consequat felis ex, et sagittis nisl congue a. Donec ipsum risus, dictum in justo sit amet, vulputate pharetra ante. Pellentesque et leo a sapien accumsan iaculis. Fusce malesuada eros arcu, fermentum imperdiet ipsum bibendum vel. Nam porttitor dignissim arcu id commodo. Nulla at ex aliquet, sodales erat nec, aliquet erat. Curabitur sodales ultrices convallis.'
            ],
        ]
    ]);
});