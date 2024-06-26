<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\RegisteredUserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register2', function () {
    return view('auth.register2');  // 新しい登録フォームのビュー
})->name('register2');

Route::post('/register2', [RegisteredUserController::class, 'storeFacility'])->name('register2.store');

Route::get('/', function () {
    return view('welcome'); // welcomeビューを表示する
})->name('top');

// 登録後にmovieビューへリダイレクトする
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

// Movie ページのルート
Route::get('/movie', function () {
    return view('movie');
});

// お問い合わせ
Route::controller(ContactController::class)->group(function(){
    Route::get('contact/create','create')->name('contact.create');
    Route::post('contact/store','store')->name('contact.store');
});

Route::get('post/mypost',[PostController::class, 'mypost'])->name('post.mypost');
Route::get('post.mycomment',[PostController::class, 'mycomment'])->name('post.mycomment');

// Route::resource('post',PostController::class);

Route::get('post/mypost',[PostController::class, 'mypost'])->name('post.mypost');

// Route::resource('post',PostController::class);

Route::post('post/comment/store',[CommentController::class,'store'])->name('comment.store');

Route::resource('post',PostController::class);

Route::get('/index', [PostController::class, 'index'])->name('index');
// Route::get('/index', function () {
//     return view('post.index');  // ここで index.blade.php を表示するように変更
// })->name('index');  // ルート名を 'index' に設定

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// 管理者用画面
Route::middleware(['can:admin'])->group(function () {
    Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');

    Route::get('/profile/adedit/{user}', [ProfileController::class, 'adedit'])->name('profile.adedit');
    Route::patch('/profile/adupdate/{user}', [ProfileController::class, 'adupdate'])->name('profile.adupdate');
    // 追加
    Route::delete('profile/{user}', [ProfileController::class, 'addestroy'])->name('profile.addestroy');
    Route::patch('roles/{user}/attach', [RoleController::class, 'attach'])->name('role.attach');
    Route::patch('roles/{user}/detach', [RoleController::class, 'detach'])->name('role.detach');
});

// ログイン後の通常のユーザー画面
Route::middleware(['verified'])->group(function(){
    Route::post('post/comment/store', [CommentController::class, 'store'])->name('comment.store');
    Route::get('mypost', [PostController::class, 'mypost'])->name('post.mypost');
    Route::get('mycomment', [PostController::class, 'mycomment'])->name('post.mycomment');
    Route::resource('post', PostController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // 管理者用画面
    Route::middleware(['can:admin'])->group(function(){
        Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
    });
});

require __DIR__.'/auth.php';
