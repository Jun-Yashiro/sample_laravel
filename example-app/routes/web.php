<?php
//
//use App\Http\Controllers\ContactController;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('Sneakers', [App\Http\Controllers\WebSiteViewController::class, 'sneakersList'])->name('sneakers.list');
//Route::get('Sneakers/Index', [App\Http\Controllers\WebSiteViewController::class, 'sneakersIndex'])->name('sneakers.index');
////アイデアの詳細画面を表示
//Route::get('/webSiteView/{id}/detail', 'App\Http\Controllers\WebSiteViewController@detail')->name('webSiteView.detail');
////Route::get('/', function () {
////    return view('welcome');
////});
////Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');
////Route::get('/ideas/{id}/idea', 'App\Http\Controllers\IdeaController@index')->name('ideas.index');
//Route::group(['middleware' => 'auth'], function() {
//
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
////管理画面
////登録アイテムを表示
//    Route::get('/ideas/{id}/list', 'App\Http\Controllers\IdeaController@list')->name('ideas.list');
////登録されたアイデアの詳細画面を表示
//    Route::get('/ideas/{id}/detail', 'App\Http\Controllers\IdeaController@detail')->name('ideas.detail');
////アイテム編集画面を表示
//    Route::get('/ideas/{idea_id}/edit', 'App\Http\Controllers\IdeaController@showEditIdea')->name('ideas.editShow');
////アイテム編集内容を送って更新
//    Route::post('/ideas/{idea_id}/edit', 'App\Http\Controllers\IdeaController@edit')->name('ideas.edit');;
////アイテム削除
//    Route::post('/ideas/delete', 'App\Http\Controllers\IdeaController@delete')->name('ideas.delete');
//
////新規登録フォームを表示
//    Route::get('/ideas/{userId}/create', 'App\Http\Controllers\IdeaController@showCreateForm')->name('ideas.create');
////入力された値を送る
//    Route::post('/ideas/{userId}/create', 'App\Http\Controllers\IdeaController@create');
//////登録アイテムを表示
////    Route::get('/ideas/{idea}', 'App\Http\Controllers\IdeaController@detail')->name('ideas.detail');
//// いいねボタン
//    Route::get('/reply/nice/{idea_id}', 'App\Http\Controllers\NiceController@nice')->name('nice');
//    Route::get('/reply/unnice/{idea_id}', 'App\Http\Controllers\NiceController@unnice')->name('unnice');
//});
////公開側
////ユーザー新規登録フォームを表示
////Route::get('/users/form', 'App\Http\Controllers\UserController@form')->name('user.form');
////ユーザー新規登録フォームで登録
////Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create');
////ユーザー詳細表示
////Route::get('/users/{user}/detail', 'App\Http\Controllers\UserController@detail')->name('user.detail');
////ユーザー編集画面を表示
////Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit');
////ユーザー編集を実行
////Route::put('/users/{user}/update', 'App\Http\Controllers\UserController@update')->name('user.update');
////ユーザー編集を実行
////Route::delete('/users/{user}/delete', 'App\Http\Controllers\UserController@delete')->name('user.delete');
//
//
////全ての登録された一覧画面を表示/sneakersにとって変わられた？
//Route::get('/webSiteView/list', 'App\Http\Controllers\WebSiteViewController@list')->name('webSiteView.list');
////昔作った、ユーザーごとにアイデアを作る方法
//Route::get('/users/{user_id}/ideas/create', 'App\Http\Controllers\IdeaController@showCreateForm')->name('ideas.create');
//Route::post('/users/{user_id}/ideas/create', 'App\Http\Controllers\IdeaController@create');
//
//Route::get('/contact', function () {
//    return view('contact');
//})->name('contact');
//Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact.store');
//Auth::routes();
//
