<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrawlerController;

Route::get('/crawler', [CrawlerController::class, 'olxCrawler'])->name('crawler');
