 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
});
Route::get('/index',function (){
   return view("welcome");
})->name('welcome');
Route::get('/login',[loginController::class,'index'])->name('login');

Route::get('/register',function (){
   return view("register");
})->name('register');
Route::get('/registerChoise',function (){
   return view("registerChoise");
})->name('registerChoise');

Route::get('/upload',function (){
    return view('upload');
})->name('upload');
