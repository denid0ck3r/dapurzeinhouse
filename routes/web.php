<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
Use App\Models\User;
Use App\Models\Category;
Use App\Models\Post;
Use App\Models\Student;
Use App\Models\About;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/studentinfo/{student:slug}', [StudentController::class, 'show']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/categoryinfo/{category:slug}', [CategoryController::class, 'show']);