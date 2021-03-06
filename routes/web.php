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

// Route::get('/', function () {
    
//     $name = 'Leonard';

    // $tasks = [
    // 	'Go to the store',
    // 	'Finish my learning',
    // 	'Clean the house'
    // ];

    // return view('welcome', ['name' => 'Leonard']);
    // return view('welcome')->with('name', 'Leonard');
    // return view('welcome', ['name' => $name]);
    // return view('welcome', compact('name', 'tasks'));
//     return view('welcome', compact('name'));

// });

// Route::get('/tasks', function () {
    
//     $name = 'Leonard';

    // $tasks = DB::table('tasks')->latest()->get();

    // $tasks = App\Task::all();

    // return view('welcome', ['name' => 'Leonard']);
    // return view('welcome')->with('name', 'Leonard');
    // return view('welcome', ['name' => $name]);
    // return view('welcome', compact('name', 'tasks'));


//     return view('tasks.index', compact('name', 'tasks'));

// });

// Route::get('/tasks/{task}', function ($id) {
    
//     $name = 'Leonard';

    // $task = DB::table('tasks')->find($id);
//     $task = App\Task::find($id);

//     return view('tasks.show', compact('name', 'task'));

// });

// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

// App::bind('App\Billing\Stripe', function () {
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });



Route::get('/', function(){
    return view('welcome');
})->name('home');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/home', function(){
    return view('welcome');
});
