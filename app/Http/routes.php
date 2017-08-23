<?php
use App\Post;

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
   return view('welcome');
});


//
//Route::get('/post/{id}', 'PostsController@index');
//
//
//Route:: resource('posts', 'PostsController');
//
//Route::get('/contact', 'PostsController@contact');

//Route::get('post/{id}/{firstname}/{lastname}', 'PostsController@show_post');


Route::get('/insert', function() {

    DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome with edwin', 'Laravel is gudder dan lamp']);
});


//DATABASE Raw SQL Queries
//
//Route::get('/read', function(){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    return $results;
//
////    foreach($results as $post) {
////        return $post->title;
////
////    }
//
//});



//Route::get('/update', function() {
//
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//
//      return $updated;
////    return var_dump($updated);
//
//
//
//
//});

//Route::get('/delete', function() {
//
//    $deleted = DB::delete('delete from posts where id = ?', [2]);
//
//    return $deleted;
//
//});





//Route::get('admin/posts/example', array('as'=>'admin.home' ,function() {
//
//    $url = route('admin.home');
//
//    return "this url is ". $url;



/*
 * -------------------------------------------------------------------
 * ELOQUENT
 * -------------------------------------------------------------------
 */

//
//Route::get('/read', function() {
//
//    $posts = Post::all();
//
//
//    foreach($posts as $post) {
//        return $post->title;
//
//    }
//
//
//});

//Route::get('/find', function() {
//
//   $posts = Post::all();
//    foreach($posts as $post) {
//        return $post->title;
//    }
//
//
//});
//
//}));


/*
 * -------------------------------------------------------------------
 * ELOQUENT
 * -------------------------------------------------------------------
 */

Route::get('/findwhere', function() {

    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

    return $posts;


});












