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

Route::get('/' , 'IndexController@view')->name('home');

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('register', 'RegisterController@view')->name('register.view');
    Route::post('register', 'RegisterController@register')->name('register');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('login', 'LoginController@loginView')->name('login.view');
    Route::post('login', 'LoginController@login')->name('login');
}); 
Route::group(['prefix' => 'panel'], function () {
    Route::get('/profile', 'ProfileController@view')->name('profile.view');
    Route::get('/sendPost', 'ProfileController@viewSendPost')->name('profile.sendPost.view');
    Route::post('/sendPost' , 'ProfileController@savePost')->name('profile.savePost');
    Route::get('/editCategory' , 'ProfileController@viewCategory')->name('view.edit.category');
    Route::post('/deleteCategory' , 'ProfileController@deleteCategory')->name('category.delete');
    Route::post('/createCategory' , 'ProfileController@createCategory')->name('category.create');
    Route::get('/editPost' , 'ProfileController@showPosts')->name('editPost.view');
    Route::get('/deletePost' , 'ProfileController@deletePost')->name('profile.post.delete');
    Route::get('/editPostContent' , 'ProfileController@showEditContent')->name('profile.post.edit');
 
}); 
Route::get('/post/{slu}' , 'PostController@viewPost')->name('findPost');

//all posts
Route::get('/posts' , 'PostsController@viewPosts')->name('posts');

Route::get('/category/{category}' , 'PostsController@viewWithCategory');

Route::post('comment' , 'CommentController@save')->name('comment.save');

Route::get('/test' , 'ProfileController@test');