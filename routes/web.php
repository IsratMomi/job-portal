<?php

use App\Http\Controllers\JobPostController;
use App\Models\JobPost;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home', [
        "jobPosts" => JobPost::take(10)->latest()->get()
    ]);
});

Route::prefix('job-post')->as("job-post.")->middleware("auth")->group(function () {
    Route::get('/', [\App\Http\Controllers\JobPostController::class, "index"])->name("index");
    Route::get('/create', [\App\Http\Controllers\JobPostController::class, "create"])->name("create");
    Route::post('/', [\App\Http\Controllers\JobPostController::class, "store"])->name("store");
    Route::get('/{jobPost}', [\App\Http\Controllers\JobPostController::class, "show"])->name("show");
    Route::get('/edit/{jobPost}', [\App\Http\Controllers\JobPostController::class, "edit"])->name("edit");
    Route::put('/{jobPost}', [\App\Http\Controllers\JobPostController::class, "update"])->name("update");
    Route::delete('/{jobPost}', [\App\Http\Controllers\JobPostController::class, "destroy"])->name("delete");

    Route::prefix('apply-job')->as("apply-job.")->middleware("auth")->group(function () {
        Route::post('/{job_post_id}', [\App\Http\Controllers\JobApplyController::class, "store"])->name("store");
        Route::get('download/{jobApply}', [\App\Http\Controllers\JobApplyController::class, "download"])->name("download");
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
