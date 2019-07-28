<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/registerUser', function () {
    return view('registerUser');
});

Route::resource('/registerUser', 'RegistersController');

Route::resource('/blog', 'PostsController');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/post/{id}',['as'=>'home.posts', 'uses' => 'AdminPostsController@post']);

Route::get('/single/{id}',['as'=>'single.posts', 'uses' => 'PostsController@post']);

Route::group(['middleware'=>'admin'], function (){

    Route::get('/admin', function (){

        return view('admin.index');

    });

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/posts', 'AdminPostsController');

    Route::resource('admin/categories', 'AdminCategoriesController');

    Route::resource('admin/media', 'AdminMediasController');


});

Route::resource('admin/comments/replies', 'CommentRepliesController');

Route::resource('admin/comments', 'PostCommentsController');

Route::group(['middleware'=>'auth'], function (){

    Route::post('comment/reply', 'CommentRepliesController@createReply');

});

