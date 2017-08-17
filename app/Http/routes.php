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

Route::get('/cms/admin', function(){
    return view('cms.admin');
});

Route::post('/admin/login' , 'postController@checkLogin');

Route::get('/admin/options',['middleware' => 'auth', function(){
    return view('cms.options');
}]);

Route::get('/admin/add',['middleware' => 'auth', function(){
    return view('cms.add_post');
}]);
 
Route::post('admin/create', [
    'middleware' => 'auth',
    'uses' => 'postController@createPost'
]);

Route::get('admin/edit', [
    'middleware' => 'auth',
    'uses' => 'postController@editPostDisplay'
]);

Route::get('/edit/{heading}' , 'postController@editPost');

Route::post('admin/edit_post' , 'postController@editPostInDB');

Route::get('/', 'postController@displayPost');

Route::get('/post/{url}' , 'postController@viewPost');

?>