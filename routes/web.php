
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

    Route::get('/','index' )->name('index');
    Route::get('faq','faq' )->name('faq');
    Route::get('about','about' )->name('about');
    Route::get('services','services' )->name('services');
    Route::get('plus','plus' )->name('plus');


});


Route::controller(UsersController::class)->group(function()
{

    Route::middleware(['auth:web', 'verified'])->group(function(){
     
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
        Route::post('/mailClient', 'envoieMail')->name('mailClient');
        Route::post('/virementEnligne', 'virementEnligne')->name('virementEnligne');

        //les etapes

        Route::get('/etape1', 'etape1')->name('etape1');
        Route::get('/etape2', 'etape2')->name('etape2');
        Route::get('/etape3', 'etape3')->name('etape3');
        Route::get('/etape4', 'etape4')->name('etape4');
        Route::get('/etape5', 'etape5')->name('etape5');
        Route::post('verifierCode/{etape}', 'verifierCode')->name('verifierCode');

        
    });

    Route::post('/verify/sendVerification', 'renvoiEmail')->middleware(['auth', 'throttle:6,1'])->name('verification.send');
    Route::get('/verify', 'verifierEmail')->name('verification.notice')->middleware('auth');    
    Route::get('/verify/{id}/{hash}', 'traitementMail')->name('verification.verify')->middleware(['auth', 'signed']);

    
    Route::middleware('guest:web')->group(function(){

        Route::get('/inscription','inscription')->name('inscription');
        Route::get('/connection','connection')->name('connection');
        Route::get('/forgetmdp','forgetmdp')->name('forgetmdp');
        Route::get('/codemdp','codemdp')->name('password');
        Route::get('/changemdp/{token}','changemdp')->name('password.reset');
        Route::post('/forget-password', 'forgetPassword')->name('forgetPassword');
        Route::post('/reset-password', 'resetPassword')->name('password.update');
        

    });
});

Route::controller(AdminController::class)->group(function(){

    Route::middleware('auth:admin')->group(function(){

        Route::get('/adindex','adindex')->name('adindex');
        Route::get('/ajoutercredit','adcredit')->name('adcredit');
        Route::get('/ajoutersolde/{user}','adcreditsend')->name('adcreditsend');
        Route::get('/transfert','adtransfert')->name('adtransfert');
        Route::get('/modifier','admodif')->name('admodif');
        //Route::get('/update','admodifsend')->name('admodifsend');
        Route::get('/status','aduserstatus')->name('aduserstatus');
        Route::get('/supprimer/{user}', 'supprimer')->name('supprimer');
        Route::get('/modifier/{user}', 'modifier')->name('modifier');
        Route::post('/modifier', 'miseAjour')->name('miseAjour');
        Route::post('/crediter', 'crediterMontant')->name('crediterMontant');
        Route::get('/logouts', 'logout')->name('logouts');
        Route::get('/confirmSup/user', 'confirmSup')->name('confirmSup');
        Route::post('/confirmSup', 'sup')->name('confirmSup');
        Route::get('/modifPassAdmin','modifPassAdmin')->name('modifPassAdmin');
        Route::post('/modifierPassAdmin', 'modifierPass')->name('modifierPassAdmin');

        

    });
    
    
    Route::get('/adminconnect','adminconnect')->name('adminconnect')->middleware('guest:admin');
    Route::post('/adminconnect', 'adminConnexion')->name('adminConnexion')->middleware('guest:admin');
});