<?php

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->get('/dashboard', function () {
    $users = User::all();
    $usertype = Auth::user()->usertype;
    if ($usertype == 'admin') {
        return view('admin.dashboard',compact('users'));
    } else {
        return back('welcome');
    }
})->name('dashboard');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::get('/blog', 'HomeController@blog')->name('blog');

Route::get('/blog-post', 'HomeController@singleBlog')->name('single-blog');


// Admin area

Route::get('/add-story', 'StoryController@addStory')->name('add_story');

Route::get('/upload-story', 'StoryController@uploadStory')->name('upload_story');

Route::get('/all-story', 'StoryController@allStory')->name('all_story');




