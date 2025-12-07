<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\PageController@index')->name('index');
Route::get('/about','App\Http\Controllers\PageController@about')->name('about');
Route::get('/portfolio','App\Http\Controllers\PageController@portfolio')->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');
Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::post('/sendmessage','App\Http\Controllers\PageController@sendmessage')->name('sendmessage');

Route::any('/checklogin', 'App\Http\Controllers\AuthController@login')->name('checklogin');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard','App\Http\Controllers\AdminController@dashboard')->name('admin.index');

    //Manager Banners
    Route::get('manage-banners','App\Http\Controllers\BannerController@index')->name('admin.banner.index');
    Route::get('manage-banner={id}','App\Http\Controllers\BannerController@show')->name('admin.banner.show');
    Route::post('manage-banners/store','App\Http\Controllers\BannerController@store')->name('admin.banner.store');
    Route::post('manage-banners/sectionbannerstore','App\Http\Controllers\BannerController@sectionBannerStore')->name('admin.sectionbanner.store');
    Route::post('manage-banners/whatwedostore','App\Http\Controllers\BannerController@whatWeDoStore')->name('admin.whatwedo.store');
    Route::post('manage-banners/update={id}','App\Http\Controllers\BannerController@update')->name('admin.banner.update');
    Route::get('manage-banners/update={id}','App\Http\Controllers\BannerController@update')->name('admin.banner.update');
    Route::post('manage-banners/delete','App\Http\Controllers\BannerController@delete')->name('admin.banner.delete');

    //Manager Brands
    Route::get('manage-brands','App\Http\Controllers\BrandController@index')->name('admin.brand.index');
    Route::get('manage-brand={id}','App\Http\Controllers\BrandController@show')->name('admin.brand.show');
    Route::post('manage-brands/store','App\Http\Controllers\BrandController@store')->name('admin.brand.store');
    Route::post('manage-brands/update={id}','App\Http\Controllers\BrandController@update')->name('admin.brand.update');
    Route::get('manage-brands/update={id}','App\Http\Controllers\BrandController@update')->name('admin.brand.update');
    Route::post('manage-brands/delete','App\Http\Controllers\BrandController@delete')->name('admin.brand.delete');

    //Manager Videos
    Route::get('manage-videos','App\Http\Controllers\VideoController@index')->name('admin.video.index');
    Route::get('manage-video={id}','App\Http\Controllers\VideoController@show')->name('admin.video.show');
    Route::post('manage-videos/store','App\Http\Controllers\VideoController@store')->name('admin.video.store');
    Route::post('manage-videos/update={id}','App\Http\Controllers\VideoController@update')->name('admin.video.update');
    Route::get('manage-videos/update={id}','App\Http\Controllers\VideoController@update')->name('admin.video.update');
    Route::post('manage-videos/delete','App\Http\Controllers\VideoController@delete')->name('admin.video.delete');

    //Manager Services
    Route::get('manage-services','App\Http\Controllers\ServiceController@index')->name('admin.service.index');

    //User Management
    Route::get('manage-users','App\Http\Controllers\UserController@index')->name('admin.users.index');
    Route::get('manage-user={id}','App\Http\Controllers\UserController@show')->name('admin.user.show');
    Route::post('manage-users/store','App\Http\Controllers\UserController@store')->name('admin.users.store');
    Route::post('manage-users/update','App\Http\Controllers\UserController@update')->name('admin.user.update');
    Route::post('manage-users/delete','App\Http\Controllers\UserController@delete')->name('admin.user.delete');

    //Profile
    Route::get('profile','App\Http\Controllers\UserController@profile')->name('admin.profile');
    Route::post('profile/update','App\Http\Controllers\UserController@updateProfile')->name('admin.profile.update');
    Route::post('profile/password','App\Http\Controllers\UserController@changePassword')->name('admin.profile.password');

    //logout
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');


    Route::get('/clear-cache', function () {
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        // Optional: re-cache after clearing
        \Artisan::call('config:cache');
        \Artisan::call('route:cache');
        \Artisan::call('view:cache');

        return redirect()->back()->with('success', 'All caches cleared and re-cached.');
    })->name('admin.clearCache');

    Route::get('/check-env', function () {
        return app()->environment();
    });
});