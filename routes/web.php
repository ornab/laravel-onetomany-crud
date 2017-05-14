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
    
    $post = new Post(['title' => 'PHP with Laravel 2', 'body'=>'Laravel is the best thing to be happen with PHP']);
    
    
    $user->posts()->save($post);
    
    
});

Route::get('/read', function(){
    
    $user = User::findOrFail(1);
    
    //return $user->posts;
    
    foreach($user->posts as $post){
        
        echo $post->title . '<br>';
        
    }
    
    
});

Route::get('/update', function(){
    
    $user = User::find(1);
    
    $user->posts()->whereId(1)->update(['title'=>'I love Laravel', 'body'=>'This is awesome, thanks Taylor Otwell']);
    
    
    
});


Route::get('/delete', function(){
    
    $user = User::findOrFail(1);
    
    foreach($user->posts as $post){
        
      $post->whereId(1)->delete();
    
      return "Done!";
        
    }
    
    
    
});








