<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Session;

Route::get('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

/*Route::get('/posts', function () {
    return view('posts');
})->name('posts');*/

Route::get('/myposts', [MyPostController::class, 'index'])->name('create');


//Route::get('/create', [PostController::class, 'index'])->name('create');

Route::get('/', function () {
    return view('home');

})->name('home');

Route::get('/astro_info', function () {
    return view('astro_info');
})->name('astro_info');

Route::get('/analysisT', function () {
    return view('analysisT');
})->name('analysisT');


Route::get('/milky_way', function () {
    return view('milky_way');
})->name('milky_way');

Route::get('/stars', function () {
    return view('stars');
})->name('stars');

Route::get('/planets', function () {
    return view('planets');
})->name('planets');


Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');

Route::get('/administrator_page', function () {
    return view('administrator_page');
})->name('administrator_page');


Route::get('/password/reset', function () {
    return view('auth.passwords.reset');
})->middleware('guest')->name('password.reset');

//TopicController
Route::post('/storeTs', [TopicController::class, 'storeTs'])->name('storeTs');
Route::put('/close_topics/{id}', [TopicController::class, 'CloseT'])->name('close_topics');

//Route::get('/moderator', [TopicController::class, 'showTopics']);
Route::get('/moderator', [TopicController::class, 'showTopics'])->name('moderator');
Route::get('/topics', [TopicController::class, 'showTopics'])->name('topics');
Route::get('/my_topics', [UserController::class, 'showTs'])->name('my_topics');
Route::get('/testsU', [UserController::class, 'TestsU'])->name('testsU');



Route::delete('moderator/{topics}',[ModeratorController::class, 'destroyT'])->name('destroyT');


Route::get('/verify/code', [RegisterController::class, 'verifyCode'])->name('verify.code');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);

Route::post('/comment/{post}', 'CommentController@store')->name('comment.store');

Route::post('/posts/like/{id}', 'PostController@like')->name('posts.like');

Route::post('/set-cookies', [CookieController::class, 'setCookies']);

Route::get('/administrator',[AdministratorController::class, 'show']);

Route::delete('/{user}',[AdministratorController::class, 'destroyU'])->name('destroyU');


Route::get('/moderator', [ModeratorController::class, 'moderator']);

Route::post('storeC', [ModeratorController::class,'storeC'])->name('storeC');



Route::get('/analysisT', [ModeratorController::class, 'analysisT'])->name('analysisT');
Route::get('/analysis', [UserController::class, 'analysis'])->name('analysis');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/user', [UserController::class, 'showTopics'])->name('user');


//Route::put('moderator/{id}',[ModeratorController::class, 'C'])->name('closeT');




Route::delete('tests/{test}',[TestController::class, 'destroyTest'])->name('destroyTest');

Route::post('addT/', [MaterialsController::class,'addT'])->name('addT');

Route::post('AddTest',[TestController::class,'AddTests'])->name('AddTest');

Route::get('/tests', [TestController::class, 'tests']);

Route::get('tests',[TestController::class,'showTest'])->name('showTest');

Route::post('createQ/', [QuestionController::class, 'createQ'])->name('createQ');

Route::get('/moderator', [ModeratorController::class, 'moderator'])->name('moderator');
Route::get('/analysisT', [ModeratorController::class, 'analysisT'])->name('analysisT');

Route::get('/administrator', [AdministratorController::class, 'show'])->name('administrator');
Route::delete('/administrator/user/{user}', [AdministratorController::class, 'destroyUser'])->name('destroyUser');
Route::delete('/administrator/news/{news}', [AdministratorController::class, 'destroyNews'])->name('destroyNews');
Route::post('/store-news', [AdministratorController::class, 'storeNews'])->name('storeNews');

Route::delete('/administrator_news/{news}', [AdministratorController::class, 'destroyNews'])->name('destroyNews');
Route::get('/administrator_news', [AdministratorController::class, 'show'])->name('administrator_news');
Route::get('/administrator_news', [AdministratorController::class, 'showNews'])->name('administrator_news');
Route::get('/moderator', [TopicController::class, 'showTopics'])->name('moderator');










