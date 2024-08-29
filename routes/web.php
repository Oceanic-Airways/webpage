<?php

use App\Http\Controllers\FsAirlinesController;
use App\Livewire\Website\Home;
use App\Livewire\Website\Index;
use App\Livewire\Website\Pilots;
use App\Livewire\Website\Settings;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', Index::class)->name('home');


Route::get('staff', function () {
    return view('website.staff');
})->name('view.staff');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('pilot')->group(function () {
        Route::get('dashboard', Home::class)->name('pilot.dashboard');
        Route::get('config', Settings::class)->name('pilot.config');
    });
});


Route::get('login', function () {
    return view('website.pilot.login');
})->name('login')->middleware("guest");

Route::get('pilots', Pilots::class)->name('view.pilot');

Route::post('login', [FsAirlinesController::class, 'login'])->name('login.post');

Route::get('lang/{lang}', function ($locale) {
    if (! in_array($locale, ["en", "es"])) {
        abort(400);
    }

    App::setLocale($locale);
    Session::put("locale", $locale);

    Log::info('Switching to locale: ' . $locale);
    return back();
});
