<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FurnitureController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Backend\RepairingController;


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

Route::get('/',function (){
    return redirect()->route('admin');
});

Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');
    Route::get('/furnitures/list',[FurnitureController::class,'furniturelist'])->name('admin.furnitures');
    Route::get('/furnitures/create',[FurnitureController::class, 'furniturecreate'])->name('admin.furnitures.create');
    Route::post('furnitures/create',[FurnitureController::class,'store'])->name('admin.furnitures.store');
    Route::get('furnitures/create/furniture-list',[FurnitureController::class,'view'])->name('admin.furnitures.list');
    Route::get('/customer/registration',[RegistrationController::class, 'registration'])->name('admin.customer.registration');
    Route::get('/repairs/create',[RepairingController::class,'create'])->name('admin.repairs.create');
    Route::post('repairs/create',[RepairingController::class,'store'])->name('admin.repairs.store');
    Route::get('repairs/create/rlist',[RepairingController::class,'view'])->name('admin.repairs.rlist');
    Route::get('/repairs/rlist',[RepairingController::class,'rlist'])->name('admin.repairs');
    
});