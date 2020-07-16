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

	Route::get('/posts' , 'PostsController@show' , function() {
		$posts = DB::table('posts')->get();
		return view('posts.show' , compact('posts'));
	});

	Route::get('/' , 'PostsController@index');

	Route::get('/posts/{post}' , 'PostsController@show');

	Route::get('/tasks' , 'PostsController@index_tasks');

	Route::get('/tasks/{task}' , 'PostsController@show_tasks'
	//  , function($id){

	// 	$task = DB::table('posts')->find($id);


	// 	return $id;
	// }
);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	// Route::get('/tasks' , function(){

	// 	$tasks = DB::table('posts')->get();

	// 	return view ('tasks/index' , compact('tasks'));
	// });

	// Route::get('tasks/{task}' , function($id){

	// 	$task = DB::table('posts')->find($id);


	// 	return view('tasks/show' , compact('task'));
	// });

