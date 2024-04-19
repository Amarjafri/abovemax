<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



Route::prefix('account')->name('account.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginSubmit'])->name('login_submit');

});








Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);


    
   




    
});







Route::prefix('settings')->group(function () {
    Route::get('/migrate', function () {
        $exitCode = Artisan::call('migrate');
        return '<h1>migrated successfully</h1>';
    });

    //Create symbolic links:
    Route::get('/app-cache', function () {
        $exitCode = Artisan::call('cache:clear');
        return '<h1>App cache cleared</h1>';
    });

    //Create symbolic links:
    Route::get('/sym-link', function () {
        $exitCode = Artisan::call('storage:link');
        return '<h1>Storage link created</h1>';
    });

    //Reoptimized class loader:
    Route::get('/optimize', function () {
        $exitCode = Artisan::call('optimize');
        return '<h1>Reoptimized class loader</h1>';
    });

    //Route cache:
    Route::get('/route-cache', function () {
        $exitCode = Artisan::call('route:cache');
        return '<h1>Routes cached</h1>';
    });

    //Clear Route cache:
    Route::get('/route-cache', function () {
        $exitCode = Artisan::call('route:cache');
        return '<h1>Route cache cleared</h1>';
    });

    //Clear View cache:
    Route::get('/view-cache', function () {
        $exitCode = Artisan::call('view:cache');
        return '<h1>View cache cleared</h1>';
    });

    //Clear Config cache:
    Route::get('/config-cache', function () {
        $exitCode = Artisan::call('config:cache');
        return '<h1>Clear Config cleared</h1>';
    });

    //Clear Config cache:
    Route::get('/config-clear', function () {
        $exitCode = Artisan::call('config:clear');
        return '<h1>Config cache cleared</h1>';
    });

    //Clear Config cache:
    Route::get('/key', function () {
        $exitCode = Artisan::call('key:generate');
        return '<h1>Clear Config cleared</h1>';
    });
});
