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

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes();

Route::middleware(['auth'])->get('/dashboard', function () {
    $users = User::all();
    $usertype = Auth::user()->usertype;
    if ($usertype == 'admin') {
        return view('admin.dashboard',compact('users'));
    } else {
        return redirect()->route('welcome');
    }
})->name('dashboard');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::get('/blog', 'HomeController@blog')->name('blog');

Route::get('/blog-post', 'HomeController@singleBlog')->name('single-blog');


// Admin area

Route::get('/edit-story', 'StoryController@editStory')->name('edit_story');

Route::post('/{id}/update-story', 'StoryController@updateStory')->name('update_story');

//

Route::get('/add-team', 'TeamController@addTeam')->name('add_team');

Route::post('/upload-team', 'TeamController@uploadTeam')->name('upload_team');

Route::get('/all-team', 'TeamController@allTeam')->name('all_team');

Route::get('/{id}/edit-team', 'TeamController@editTeam')->name('edit_team');

Route::post('/{id}/update-team', 'TeamController@updateTeam')->name('update_team');

Route::get('/{id}/delete-team', 'TeamController@deleteTeam')->name('delete_team');

//

Route::get('/add-review', 'ReviewController@addReview')->name('add_review');

Route::post('/upload-review', 'ReviewController@uploadReview')->name('upload_review');

Route::get('/all-review', 'ReviewController@allReview')->name('all_review');

Route::get('/{id}/edit-review', 'ReviewController@editReview')->name('edit_review');

Route::post('/{id}/update-review', 'ReviewController@updateReview')->name('update_review');

Route::get('/{id}/delete-review', 'ReviewController@deleteReview')->name('delete_review');

//

Route::get('/add-gallery', 'GalleryController@addGallery')->name('add_gallery');

Route::post('/upload-gallery', 'GalleryController@uploadGallery')->name('upload_gallery');

Route::get('/all-gallery', 'GalleryController@allGallery')->name('all_gallery');

Route::get('/{id}/edit-gallery', 'GalleryController@editGallery')->name('edit_gallery');

Route::post('/{id}/update-gallery', 'GalleryController@updateGallery')->name('update_gallery');

Route::get('/{id}/delete-gallery', 'GalleryController@deleteGallery')->name('delete_gallery');

//

Route::get('/edit-agenda', 'AgendaController@editAgenda')->name('edit_agenda');

Route::post('/{id}/update-agenda', 'AgendaController@updateAgenda')->name('update_agenda');

//

Route::get('/add-service', 'ServiceController@addService')->name('add_service');

Route::post('/upload-service', 'ServiceController@uploadService')->name('upload_service');

Route::get('/all-service', 'ServiceController@allService')->name('all_service');

Route::get('/{id}/edit-service', 'ServiceController@editService')->name('edit_service');

Route::post('/{id}/update-service', 'ServiceController@updateService')->name('update_service');

Route::get('/{id}/delete-service', 'ServiceController@deleteService')->name('delete_service');

//

Route::post('/upload-application', 'ApplicationController@uploadApplication')->name('upload_application');

Route::get('/all-application', 'ApplicationController@allApplication')->name('all_application');

Route::get('/{id}/delete-application', 'ApplicationController@deleteApplication')->name('delete_application');

//

Route::post('/upload-contact', 'ContactController@uploadContact')->name('upload_contact');

Route::get('/all-contact', 'ContactController@allContact')->name('all_contact');

Route::get('/{id}/delete-contact', 'ContactController@deleteContact')->name('delete_contact');
