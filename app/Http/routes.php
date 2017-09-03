<?php
use App\Post;
use App\User;
//use App\Role;

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


//Route::get('/insert', function() {
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome with edwin', 'Laravel is gudder dan lamp']);
//});
//


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

//Route::get('/findwhere', function() {
//
//    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//
//});


/*
 * -------------------------------------------------------------------
 * ELOQUENT
 * -------------------------------------------------------------------
 */

//Route::get('/findmore', function() {
//
////   $posts = Post::findOrFail(3);
////
////   return $posts;
//
//     $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//
//});

//
//Route::get('/basicinsert', function() {
//
//    $post = new Post;
//
//    $post->title = 'title number three';
//    $post->content = 'more content here';
//
//    $post->save();
//
//
//
//});


//Route::get('/basicinsert2', function() {
//
//    $post = Post::find(3);
//
//    $post->title = 'updated title son';
//    $post->content = 'the content of id 3 has changed son';
//
//    $post->save();
//
//
//});

//Route::get('/create', function() {
//
//    Post::create(['title' => 'more data here', 'content' => 'this is more data']);
//
//
//});



//Route::get('/update', function() {
//
//   Post::where('id', 1)->where('is_admin', 0)->update(['title' => 'New PHP title', 'content' => 'this shit is on fleek son']);
//
//});


//
//Route::get('/delete', function() {
//
//    $post = Post::find(3);
//
//    $post->delete();
//
//});


//Route::get('/delete2', function() {
//
//    Post::destroy(3);
////    Post::destroy([1,4,5]); //delete multiple id's
////
////    Post::where('is_admin', 0)->delete(); //delete by query
//});


//Route::get('/softdelete', function() {
//
//    Post::find(1)->delete();
//
//
//});
//
//
//Route::get('/readsoftdelete', function() {
//
////    $post = Post::find(1);
////    return  $post;
//
////    $post = Post::withTrashed()->where('is_admin', 0)->get();
////    return $post;
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//    return $post;
//
//
//});


//Route::get('/restore', function() {
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});

//Route::get('/forcedelete', function() {
//
//   Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
//
//});



/*
 * -------------------------------------------------------------------
 * ELOQUENT RELATIONSHIPS
 * -------------------------------------------------------------------
 */

//// 1 TO 1 RELATIONSHIP
//
//Route::get('/user/{id}/post', function($id) {
//
//    return User::find($id)->post->content;
//});
//
//

//// INVERSE RELATIONSHIP

//
//Route::get('/post/{id}/user', function ($id) {
//
//    return Post::find($id)->user->name;
//
//});


//////ONE TO MANY RELATIONSHIP

//Route::get('/posts', function () {
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post) {
//
//        echo $post->title . "<br>";
//
//    }
//
//});



//// MANY TO MANY RELATIONSHIP

//Route::get('/posts', function () {
//
//    $user = User::find(2);
//
//    foreach($user->posts as $post) {
//        echo $post->content . "<br>";
//
//    }
//
//});


///// MANY TO MANY INVERSE TABLE (JOIN) RELATIONSHIP

//Route::get('/user/{id}/role', function($id) {
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
//
////    foreach($user->roles as $role) {
////
////        echo $role->name;
////    }
//
//});
//


/// Accessing the intermediate table / pivot

Route::get('user/pivot', function() {

   $user = User::find(1);

   foreach ($user->roles as $role) {

       return $role->pivot->created_at;
   }

});















