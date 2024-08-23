<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdministratorController;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ModeratorController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PollController;

Route::get('/', function () {
    return view('home');

})->name('home');

Route::get('/astro_info', function () {
    return view('astro_info');
})->name('astro_info');

Route::get('/milky_way', function () {
    return view('milky_way');
})->name('milky_way');

Route::get('/stars', function () {
    return view('stars');
})->name('stars');

Route::get('/planets', function () {
    return view('planets');
})->name('planets');

/*Route::get('/trainees', function () {
    return view('trainees');
})->name('trainees');*/

/*Route::get('/my_topics2', function () {
    return view('auth.my_topics2');
})->name('my_topics2');*/

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');

/*Route::get('/administrator_page', function () {
    return view('administrator_page');
})->name('administrator_page');*/

//TopicController
Route::post('/storeTs', [TopicController::class, 'storeTs'])->name('storeTs');
Route::put('/close_topic', [TopicController::class, 'CloseT'])->name('close_topics');
//Route::get('/moderator', [TopicController::class, 'showTopics']);
Route::get('/moderator', [TopicController::class, 'showTopics'])->name('moderator');
Route::get('/topics', [TopicController::class, 'showTopics'])->name('topics');
Route::get('/my_topics', [UserController::class, 'myTopics'])->name('my_topics');
Route::get('/testsU', [UserController::class, 'TestsU'])->name('testsU');
Route::get('/tests/{topic_id?}', [PollController::class, 'index'])->name('tests');

Route::post('/loginuser',[LoginController::class, 'login_user'])->name('loginuser');

Route::delete('moderator/{topics}',[ModeratorController::class, 'destroyT'])->name('destroyT');


Route::get('/verify/code', [RegisterController::class, 'verifyCode'])->name('verify.code');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);





Route::post('/set-cookies', [CookieController::class, 'setCookies']);

Route::get('/administrator',[AdministratorController::class, 'show']);

Route::delete('/{user}',[AdministratorController::class, 'destroyU'])->name('destroyU');


Route::get('/moderator', [ModeratorController::class, 'moderator']);

Route::post('storeC', [ModeratorController::class,'storeC'])->name('storeC');



Route::get('/trainees', [ModeratorController::class, 'trainees'])->name('trainees');
Route::get('/analysis', [UserController::class, 'analysis'])->name('analysis');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/user', [UserController::class, 'showTopics'])->name('user');


//Route::put('moderator/{id}',[ModeratorController::class, 'C'])->name('closeT');






Route::get('/moderator', [ModeratorController::class, 'moderator'])->name('moderator');
Route::get('/trainees', [ModeratorController::class, 'trainees'])->name('trainees');
Route::delete('/remove-user-from-topic/{user_id}/{topic_id}', [ModeratorController::class, 'removeUserFromTopic'])->name('removeUserFromTopic');

Route::get('/administrator', [AdministratorController::class, 'show'])->name('administrator');
Route::delete('/administrator/user/{user}', [AdministratorController::class, 'destroyUser'])->name('destroyUser');
Route::delete('/administrator/news/{news}', [AdministratorController::class, 'destroyNews'])->name('destroyNews');
Route::post('/store-news', [AdministratorController::class, 'storeNews'])->name('storeNews');

Route::delete('/administrator_news/{news}', [AdministratorController::class, 'destroyNews'])->name('destroyNews');
Route::get('/administrator_news', [AdministratorController::class, 'show'])->name('administrator_news');
Route::get('/administrator_news', [AdministratorController::class, 'showNews'])->name('administrator_news');
Route::get('/moderator', [TopicController::class, 'showTopics'])->name('moderator');



/*Route::post('/follow', [UserController::class, 'follow'])->name('follow');
Route::get('/my_topics', [UserController::class, 'showFollowedTopics'])->name('my_topics2');
Route::get('/my_topics', [UserController::class, 'showNotFollowedTopics'])->name('my_topics');*/


Route::get('/my_topics', [UserController::class, 'showNotFollowedTopics'])->name('my_topics');
Route::get('/my_topics2', [UserController::class, 'showFollowedTopics'])->name('my_topics2');
Route::post('/follow', [UserController::class, 'follow'])->name('follow');

Route::get('/tests', [PollController::class, 'index'])->name('tests');
Route::post('/vote-poll/{id}', [PollController::class, 'vote'])->name('vote');

Route::post('/store-poll', [PollController::class, 'store'])->name('storePoll');
//Route::post('/vote-poll/{id}/{option}', [PollController::class, 'vote'])->name('votePoll');
Route::get('/tests/{topic_id}', [PollController::class, 'index'])->name('tests');
//Route::get('/topics/{topic_id}/polls', [PollController::class, 'index'])->name('polls.byTopic');

Route::get('/moderator', [TopicController::class, 'showTopics'])->name('moderator');
Route::post('/storeT', [TopicController::class, 'storeT'])->name('storeT');
Route::delete('/destroyT/{id}', [TopicController::class, 'destroyT'])->name('destroyT');
Route::post('/closeT/{id}', [TopicController::class, 'closeT'])->name('closeT');