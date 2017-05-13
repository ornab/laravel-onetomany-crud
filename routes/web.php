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

use App\User;
use App\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function(){
    
    $user = User::findOrFail(1);
    
    $post = new Post(['title' => 'PHP with Laravel', 'body'=>'Laravel is the best framework of PHP']);
    
    
    $user->posts()->save($post);
    
    
});