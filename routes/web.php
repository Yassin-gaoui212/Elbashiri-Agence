<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\InstagramController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/destinations', [DestinationsController::class, 'index'])->name('destinations');
Route::get('/destinations/{country}', [DestinationsController::class, 'show'])->name('destination');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/instagram', [InstagramController::class, 'index'])->name('instagram.index');

// Language Routes
Route::get('language/{lang}', [LanguageController::class, 'switchLang'])->name('language.switch');

// Sitemap Route
Route::get('sitemap.xml', [SitemapController::class, 'index']);
