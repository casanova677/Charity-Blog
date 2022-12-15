<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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



Route::get('/create', function () {
    return view('admin/create');
})->middleware(['auth'])->name('create');

Route::get('/about', function () {
    return view('about');
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('blog_view/{blogPost}', [BlogPostController::class, 'blog_view'])->name('blog_view');
Route::get('blog', [BlogPostController::class, 'blog'])->name('blog');
Route::post('card_pay', [CommentController::class, 'card'])->name('card');
Route::post('comment/{blog}', [CommentController::class, 'store'])->name('comment');
Route::get('like/{blogPost}', [BlogPostController::class, 'like'])->name('like');
Route::get('causes', [CommentController::class, 'cases'])->name('causes');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::post('subsribe', [PageController::class, 'subscribe'])->name('subsribe');
Route::post('contact_us', [PageController::class, 'contact'])->name('contact_us');
Route::post('volut_new', [PageController::class, 'volut_new'])->name('volut_new');
Route::get('donate', [PageController::class, 'donate'])->name('donate');
Route::get('event', [PageController::class, 'event'])->name('event');




Route::middleware(['auth'])->group(function () {
    Route::post('/new_post/{$id}', [BlogPostController::class, 'store'])->name('new_post');
    Route::get('dashboard', [BlogPostController::class, 'index'])->name('dashboard');
    Route::post('/create_cause', [CommentController::class, 'create_cause'])->name('create_cause');
    Route::get('cause_list', [CommentController::class, 'causes'])->name('cause_list');
    Route::get('delete_cause/{cause}', [CommentController::class, 'delete'])->name('delete_cause');
    Route::get('credit', [CommentController::class, 'credit'])->name('credit');
    Route::get('subscribe', [CommentController::class, 'subscribe'])->name('subscribe');
     Route::get('sendmail', [CommentController::class, 'sendmail'])->name('sendmail');
     Route::get('/comp_email', 'App\Http\Controllers\CommentController@comp_email')->name('comp_email');
    Route::get('/edit_post/{blogPost}', [BlogPostController::class, 'edit'])->name('edit_post');
    Route::get('view_post/{blogPost}', [BlogPostController::class, 'show'])->name('view_post');
    Route::get('delete_post/{blogPost}', [BlogPostController::class, 'destroy'])->name('delete_post');
    Route::post('update_post/{blogPost}', [BlogPostController::class, 'update'])->name('update_post');
    Route::post('create_event', [EventController::class, 'create_event'])->name('create_event');
    Route::get('event_list', [EventController::class, 'index'])->name('event_list');
    Route::get('delete_event/{event}', [EventController::class, 'delete'])->name('delete_event');
    
});

require __DIR__.'/auth.php';