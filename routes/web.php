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

Route::get('/display', function () {
    $form = \App\Form::all();

    return view('welcome', ['forms' => $form]);
});

Auth::routes();

Route::get('/', function () {
    return view('submit');
});

use Illuminate\Http\Request;

Route::post('/', function (Request $request) {
    $data = $request->validate([
        'fname' => 'required|max:30',
        'lname' => 'required|max:50',
        'email' => 'required|email',
        'mobile' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'comments' => 'max:255',
    ]);

    $form = tap(new App\Form($data))->save();

    return redirect('/display');
});

Route::get('/home', 'HomeController@index')->name('home');
