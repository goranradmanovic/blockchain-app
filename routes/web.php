<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Pages\BlocksHash;
use App\Livewire\Pages\TransactionsHash;
use App\Livewire\Pages\NodesHash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('pages/blocks-hash', BlocksHash::class)->name('pages.blocks-hash');
    Route::get('pages/transactions-hash', TransactionsHash::class)->name('pages.transactions-hash');
    Route::get('pages/nodes-hash', NodesHash::class)->name('pages.nodes-hash');
    
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
