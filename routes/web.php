<?php

use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SpecialOfferController;
use App\Http\Controllers\TestDriveController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/legal', [LegalController::class, 'legal'])->name('legal');
Route::get('/privacy-policy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('/test-drive', [TestDriveController::class, 'index'])->name('testdrive');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/price', [PricelistController::class, 'index'])->name('price');
Route::get('/site-map', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'detail'])->name('news.detail');
Route::get('/special-offer', [SpecialOfferController::class, 'index'])->name('specialoffer');
Route::get('/form-offers/{id}-{slug}', [SpecialOfferController::class, 'formoffers'])->name('specialoffer.form');
Route::get('/after-sales', [SpecialOfferController::class, 'aftersales'])->name('aftersales');
Route::get('/after-sales/{id}-{slug}', [SpecialOfferController::class, 'aftersalesDetail'])->name('aftersales.detail');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/model', [ModelsController::class, 'index'])->name('models');
Route::get('/model-{slug}-{type_id}.htm', [ModelsController::class, 'detail'])->name('model_detail');
Route::get('/specification-{slug}-{type_id}.htm', [ModelsController::class, 'spesifikasi'])->name('model_spesifikasi');