<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ThanksController;

use App\Http\Livewire\Input;

Route::get('/', Input::class)->name('contact.index');

Route::get('management', [ManagementController::class, 'index']);
Route::get('management', [ManagementController::class, 'search'])->name('management.search');
Route::get('thanks', [ThanksController::class, 'index']);
Route::post('confirm', [ContactController::class, 'posted'])->name('contact.confirm');
Route::post('fix', [ContactController::class, 'send']);
Route::post('management', [ManagementController::class, 'delete'])->name('management.delete');

