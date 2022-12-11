
<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(UsersController::class)->group(function()
{

    Route::middleware('auth')->group(function(){

        Route::get('/comptes','index')->name('compte');
        Route::get('/profile','profil')->name('profil');
        Route::get('/editeprofile','editer')->name('editer');
        Route::get('/securite','securite')->name('securite');
        Route::get('/visa','visa')->name('visa');
        Route::get('/logout', 'logout')->name('logout');                                   

    });

    Route::middleware('guest')->group(function(){

        Route::get('/inscription','inscription')->name('inscription');
        Route::get('/connection','connection')->name('connection');
        Route::get('/forgetmdp','forgetmdp')->name('forgetmdp');
        Route::get('/codemdp','codemdp')->name('codemdp');
        Route::get('/changemdp','changemdp')->name('changemdp');

    });





});