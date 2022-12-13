
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::controller(SiteController::class)->group(function(){

    Route::get('/','index' )->name('siteindex');
});


Route::controller(UsersController::class)->group(function()
{

    Route::middleware(['auth', 'verified'])->group(function(){
     
        Route::get('/comptes','index')->name('compte');
        Route::get('/profile','profil')->name('profil');
        Route::get('/editeprofile','editer')->name('editer');
        Route::get('/securite','securite')->name('securite');
        Route::get('/visa','visa')->name('visa');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('/modifierPass/{user}', 'modifierPass')->name('modifierPass');  
        Route::post('/modifierProfil/{user}', 'modifierProfil')->name('modifierProfil');
        Route::get('/virement','virement')->name('virement');
        Route::get('/boxsend','boxsend')->name('boxsend');

        
    });

    Route::post('/verify/sendVerification', 'renvoiEmail')->middleware(['auth', 'throttle:6,1'])->name('verification.send');
    Route::get('/verify', 'verifierEmail')->name('verification.notice')->middleware('auth');    
    Route::get('/verify/{id}/{hash}', 'traitementMail')->name('verification.verify')->middleware(['auth', 'signed']);

    
    Route::middleware('guest')->group(function(){

        Route::get('/inscription','inscription')->name('inscription');
        Route::get('/connection','connection')->name('connection');
        Route::get('/forgetmdp','forgetmdp')->name('forgetmdp');
        Route::get('/codemdp','codemdp')->name('password');
        Route::get('/changemdp/{token}','changemdp')->name('password.reset');
        Route::post('forget-password', 'forgetPassword')->name('forgetPassword');
        Route::post('reset-password', 'resetPassword')->name('password.update');

    });
});

Route::controller(AdminController::class)->group(function(){

    Route::get('/admin','admin')->name('admin');
    Route::get('/adindex','adindex')->name('adindex');
    Route::get('/ajoutercredit','adcredit')->name('adcredit');
    Route::get('/ajoutersolde/{user}','adcreditsend')->name('adcreditsend');
    Route::get('/transfert','adtransfert')->name('adtransfert');
    Route::get('/modifier','admodif')->name('admodif');
    //Route::get('/update','admodifsend')->name('admodifsend');
    Route::get('/status','aduserstatus')->name('aduserstatus');
    Route::get('/adminconnect','adminconnect')->name('adminconnect');
    Route::get('/supprimer/{user}', 'supprimer')->name('supprimer');
    Route::get('/modifier/{user}', 'modifier')->name('modifier');
    Route::post('/modifier', 'miseAjour')->name('miseAjour');
    Route::post('/crediter', 'crediterMontant')->name('crediterMontant');
});