<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

Route::get('/',[MainController::class,'dashboard'])->name('home');
Route::get('Mainpage',[MainController::class,'index'])->name('main' );
Route::middleware('post')->group(function () {
Route::get('/register',[UserController::class,'registerForm'])->name('registerForm');//->middleware('post');
Route::get('/email-verify',[UserController::class,'emailVerify'])->name('email.verify');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::get('/login',[UserController::class,'loginForm'])->name('loginForm');//->middleware('post');
Route::post('login',[UserController::class,'login'])->name('login');
});
Route::middleware('register')->group(function () {


Route::get('edituser/{id}',[UserController::class,'editForm'])->name('editprofile');
Route::put('updateuser', [UserController::class,'update'])->name('update.profile');
Route::get('/user/profile/{id}',[UserController::class,'userprofile'])->name('users.profile');
Route::delete('/logout', [UserController::class,'logout'])->name('logout');
Route::get('my/profile',[UserController::class,'my_profile'])->name('my.profile');
Route::post( '/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::delete( '/comments/destroy/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::patch('/read/notify{id}', [NotificationController::class,'readNotify'])->name('mark.notification.read');
Route::resource( '/posts', PostController::class);
Route::post('/follow/{user}',[FollowController::class,'follow'])->name('follow');
Route::delete('/follow/{id}', [FollowController::class, 'unfollow'])->name('unfollow');
Route::get('/notify',[FollowController::class,'notify'])->name('notify');
});
Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');