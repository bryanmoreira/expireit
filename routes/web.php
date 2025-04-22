<?php

use App\Livewire\Messages\CreateLink;
use App\Livewire\Messages\LinkViewer;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Users\UserList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('create-link', CreateLink::class)->name('create-link');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::middleware(['auth', 'check_admin'])->group(function () {
    Route::get('users', UserList::class)->name('users.list');
});

Route::get('link/{token}', LinkViewer::class)->name('link.view');

require __DIR__.'/auth.php';
