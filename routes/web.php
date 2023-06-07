<?php

use Illuminate\Support\Facades\Route;

//route home
Route::get('/', function () {
    return \Inertia\Inertia::render('Auth/Login');
})->middleware('guest');

//prefix "apps"
Route::prefix('apps')->group(function() {

    //middleware "auth"
    Route::group(['middleware' => ['auth']], function () {

        //route dashboard
        Route::get('dashboard', App\Http\Controllers\Apps\DashboardController::class)->name('apps.dashboard');

        //route Freight
        Route::get('air-freight-detail/{id}', [App\Http\Controllers\Freight\AirFreightController::class, 'detailAirFreight'])->name('air-freight.detail');
        Route::get('air-freight-detail/{id}/create', [App\Http\Controllers\Freight\AirFreightController::class, 'createDetailAirFreight'])->name('air-freight.create.detail');
        Route::post('air-freight-detail/create', [App\Http\Controllers\Freight\AirFreightController::class, 'storeDetailAirFreight'])->name('air-freight.store.detail');
        Route::get('air-freight-detail-new', [App\Http\Controllers\Freight\AirFreightController::class, 'detailAirFreightNew'])->name('air-freight.detail-new');
        Route::post('air-freight/detail-freight', [App\Http\Controllers\Freight\AirFreightController::class, 'index'])->name('detail-freight.show');
        Route::resource('air-freight', App\Http\Controllers\Freight\AirFreightController::class);

        
    });
});