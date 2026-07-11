<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/thank-you', function () {
    return view('thank-you');
});

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/mobile-app-development-company-in-melbourne', function () {
    return view('services.business.mobile-app-melbourne');
});

Route::get('/mobile-app-development-company-in-australia', function () {
    return view('services.business.mobile-app-australia');
});

Route::get('/software-development-company-in-melbourne', function () {
    return view('services.business.software');
});

Route::get('/AI', function () {
    return view('services.business.AI');
});

Route::get('/ui-ux-design-services-melbourne', function () {
    return view('services.digital-marketing.ui-ux');
});

Route::get('/website-development-services-melbourne', function () {
    return view('services.digital-marketing.web-development');
});

Route::get('/seo-sem-services-melbourne', function () {
    return view('services.digital-marketing.seo-sem');
});

Route::get('/nft-marketplace-development-services-melbourne', function () {
    return view('services.blockchain.nft-marketplace');
});

Route::get('/privacy-policy', fn() => view('privacy-policy'));
Route::get('/terms-and-conditions', fn() => view('terms-and-conditions'));
Route::get('/copyrights', fn() => view('copyrights'));

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


