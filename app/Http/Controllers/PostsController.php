<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    public function index()  // Действие
    {
    	return view('posts.index'); // В папке постс с именем индекс
    }

    public function show()  // Действие
    {
    	// ->with['name' , '2']     , ['dasdas' => 'asdasd', 'asdas' =>'12sad']
    	$post = Post::all();
    	foreach ($post as $p) 
    	// {
    	// 	if ($post->id == 1) 
    	// 	{
    	// 		$id = $post->id;			
    	// 	}	
    	// }
    	return view('posts.show',compact('post')); // В папке постс с именем show
    }

    public function index_tasks() 
    {

        $tasks = Post::all();
        // $flight = Post::create([
        //                         'number' => 'abc123',
        //                         'title' => 'Sred' , 
        //                         'body' => 'text Sred']);

        return view ('tasks/index' , compact('tasks'));
    }

    public function show_tasks($id) {

        $task = Post::all();
        $p = $task->where('number' , $id)->first();
       // $task = DB::table('posts')->find($id);


        return view('tasks/show' , compact('p' , 'task'));
    }
}
