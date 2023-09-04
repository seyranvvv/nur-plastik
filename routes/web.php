<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dil/{key}', function ($key) {
    session()->put('locale', $key);
    return redirect()->back();
})->name('language');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin-05', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin-05', 'Auth\LoginController@login');
Route::post('/admin-06', 'Auth\LoginController@logout')->name('logout');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/password', 'PasswordController@edit')->name('password.edit');
    Route::post('/password', 'PasswordController@update')->name('password.update');

    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users', 'UserController@store')->name('users.store');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/users/{id}', 'UserController@update')->name('users.update');
    Route::delete('/users/{id}', 'UserController@delete')->name('users.delete');
    Route::get('/users/{id}/new-password', 'UserController@newPassword')->name('users.new-password');

    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::get('/contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
    Route::put('/contact/{id}', 'ContactController@update')->name('contact.update');



    Route::get('/about', 'AboutController@index')->name('about.index');
    Route::get('/about/{id}/edit', 'AboutController@edit')->name('about.edit');
    Route::put('/about/{id}', 'AboutController@update')->name('about.update');





    Route::get('/sliders', 'SliderController@index')->name('sliders.index');
    Route::get('/sliders/create', 'SliderController@create')->name('sliders.create');
    Route::post('/sliders', 'SliderController@store')->name('sliders.store');
    Route::get('/sliders/{id}/edit', 'SliderController@edit')->name('sliders.edit')->where(['id' => '[0-9]+']);
    Route::put('/sliders/{id}', 'SliderController@update')->name('sliders.update')->where(['id' => '[0-9]+']);
    Route::delete('/sliders/{id}', 'SliderController@delete')->name('sliders.delete')->where(['id' => '[0-9]+']);




    Route::get('/aboutBanner', 'AboutBannerController@index')->name('aboutBanner.index');
    Route::get('/aboutBanner/create', 'AboutBannerController@create')->name('aboutBanner.create');
    Route::post('/aboutBanner', 'AboutBannerController@store')->name('aboutBanner.store');
    Route::get('/aboutBanner/{id}/edit', 'AboutBannerController@edit')->name('aboutBanner.edit');
    Route::put('/aboutBanner/{id}', 'AboutBannerController@update')->name('aboutBanner.update');
    Route::delete('/aboutBanner/{id}', 'AboutBannerController@delete')->name('aboutBanner.delete');


    Route::get('/difference', 'DifferenceController@index')->name('difference.index');
    Route::get('/difference/create', 'DifferenceController@create')->name('difference.create');
    Route::post('/difference', 'DifferenceController@store')->name('difference.store');
    Route::get('/difference/{id}/edit', 'DifferenceController@edit')->name('difference.edit');
    Route::put('/difference/{id}', 'DifferenceController@update')->name('difference.update');
    Route::delete('/difference/{id}', 'DifferenceController@delete')->name('difference.delete');



    Route::get('/contactBanner', 'ContactBannerController@index')->name('contactBanner.index');
    Route::get('/contactBanner/create', 'ContactBannerController@create')->name('contactBanner.create');
    Route::post('/contactBanner', 'ContactBannerController@store')->name('contactBanner.store');
    Route::get('/contactBanner/{id}/edit', 'ContactBannerController@edit')->name('contactBanner.edit');
    Route::put('/contactBanner/{id}', 'ContactBannerController@update')->name('contactBanner.update');
    Route::delete('/contactBanner/{id}', 'ContactBannerController@delete')->name('contactBanner.delete');



    Route::get('/service', 'ServiceController@index')->name('service.index');
    Route::get('/service/create', 'ServiceController@create')->name('service.create');
    Route::post('/service', 'ServiceController@store')->name('service.store');
    Route::get('/service/{id}/edit', 'ServiceController@edit')->name('service.edit');
    Route::put('/service/{id}', 'ServiceController@update')->name('service.update');
    Route::delete('/service/{id}', 'ServiceController@delete')->name('service.delete');


    Route::get('/postBanner', 'PostBannerController@index')->name('postBanner.index');
    Route::get('/postBanner/create', 'PostBannerController@create')->name('postBanner.create');
    Route::post('/postBanner', 'PostBannerController@store')->name('postBanner.store');
    Route::get('/postBanner/{id}/edit', 'PostBannerController@edit')->name('postBanner.edit');
    Route::put('/postBanner/{id}', 'PostBannerController@update')->name('postBanner.update');
    Route::delete('/postBanner/{id}', 'PostBannerController@delete')->name('postBanner.delete');


    Route::get('/serviceBanner', 'ServiceBannerController@index')->name('serviceBanner.index');
    Route::get('/serviceBanner/create', 'ServiceBannerController@create')->name('serviceBanner.create');
    Route::post('/serviceBanner', 'ServiceBannerController@store')->name('serviceBanner.store');
    Route::get('/serviceBanner/{id}/edit', 'ServiceBannerController@edit')->name('serviceBanner.edit');
    Route::put('/serviceBanner/{id}', 'ServiceBannerController@update')->name('serviceBanner.update');
    Route::delete('/serviceBanner/{id}', 'ServiceBannerController@delete')->name('serviceBanner.delete');

    Route::get('/goal', 'GoalController@index')->name('goal.index');
    Route::get('/goal/create', 'GoalController@create')->name('goal.create');
    Route::post('/goal', 'GoalController@store')->name('goal.store');
    Route::get('/goal/{id}/edit', 'GoalController@edit')->name('goal.edit');
    Route::put('/goal/{id}', 'GoalController@update')->name('goal.update');
    Route::delete('/goal/{id}', 'GoalController@delete')->name('goal.delete');



    Route::get('/project', 'ProjectController@index')->name('project.index');
    Route::get('/project/create', 'ProjectController@create')->name('project.create');
    Route::post('/project', 'ProjectController@store')->name('project.store');
    Route::get('/project/{id}/edit', 'ProjectController@edit')->name('project.edit');
    Route::put('/project/{id}', 'ProjectController@update')->name('project.update');
    Route::delete('/project/{id}', 'ProjectController@delete')->name('project.delete');


    Route::get('/aboutText', 'AboutTextController@index')->name('aboutText.index');
    Route::get('/aboutText/create', 'AboutTextController@create')->name('aboutText.create');
    Route::post('/aboutText', 'AboutTextController@store')->name('aboutText.store');
    Route::get('/aboutText/{id}/edit', 'AboutTextController@edit')->name('aboutText.edit');
    Route::put('/aboutText/{id}', 'AboutTextController@update')->name('aboutText.update');
    Route::delete('/aboutText/{id}', 'AboutTextController@delete')->name('aboutText.delete');


    Route::get('/ourFeauter', 'OurFeauterController@index')->name('ourFeauter.index');
    Route::get('/ourFeauter/create', 'OurFeauterController@create')->name('ourFeauter.create');
    Route::post('/ourFeauter', 'OurFeauterController@store')->name('ourFeauter.store');
    Route::get('/ourFeauter/{id}/edit', 'OurFeauterController@edit')->name('ourFeauter.edit');
    Route::put('/ourFeauter/{id}', 'OurFeauterController@update')->name('ourFeauter.update');
    Route::delete('/ourFeauter/{id}', 'OurFeauterController@delete')->name('ourFeauter.delete');


    Route::get('/baner', 'BanerController@index')->name('baner.index');
    Route::get('/baner/create', 'BanerController@create')->name('baner.create');
    Route::post('/baner', 'BanerController@store')->name('baner.store');
    Route::get('/baner/{id}/edit', 'BanerController@edit')->name('baner.edit');
    Route::put('/baner/{id}', 'BanerController@update')->name('baner.update');
    Route::delete('/baner/{id}', 'BanerController@delete')->name('baner.delete');



    Route::get('/total', 'TotalController@index')->name('total.index');
    Route::get('/total/{id}/edit', 'TotalController@edit')->name('total.edit');
    Route::put('/total/{id}', 'TotalController@update')->name('total.update');

    Route::get('/aboutOur', 'AboutOurController@index')->name('aboutOur.index');
    Route::get('/aboutOur/{id}/edit', 'AboutOurController@edit')->name('aboutOur.edit');
    Route::put('/aboutOur/{id}', 'AboutOurController@update')->name('aboutOur.update');

    Route::get('/serviceAbout', 'ServiceAboutController@index')->name('serviceAbout.index');
    Route::get('/serviceAbout/create', 'ServiceAboutController@create')->name('serviceAbout.create');
    Route::post('/serviceAbout', 'ServiceAboutController@store')->name('serviceAbout.store');
    Route::get('/serviceAbout/{id}/edit', 'ServiceAboutController@edit')->name('serviceAbout.edit');
    Route::put('/serviceAbout/{id}', 'ServiceAboutController@update')->name('serviceAbout.update');
    Route::delete('/serviceAbout/{id}', 'ServiceAboutController@delete')->name('serviceAbout.delete');



    Route::get('/baner', 'BanerController@index')->name('baner.index');
    Route::get('/baner/create', 'BanerController@create')->name('baner.create');
    Route::post('/baner', 'BanerController@store')->name('baner.store');
    Route::get('/baner/{id}/edit', 'BanerController@edit')->name('baner.edit');
    Route::put('/baner/{id}', 'BanerController@update')->name('baner.update');
    Route::delete('/baner/{id}', 'BanerController@delete')->name('baner.delete');



    Route::get('/videos', 'VideoController@index')->name('video.index');
    Route::get('/video/create', 'VideoController@create')->name('video.create');
    Route::post('/video/create', 'VideoController@store')->name('video.store');
    Route::get('/video/{id}/edit', 'VideoController@edit')->name('video.edit');
    Route::put('/video/{id}', 'VideoController@update')->name('video.update');
    Route::post('/video/create_file', 'VideoController@store_file')->name('video.store_file');
    Route::delete('/video/{id}/delete', 'VideoController@delete')->name('video.delete');


    Route::get('/posts', 'PostController@index')->name('post.index');
    Route::post('/post/api', 'PostController@api')->name('post.api');
    Route::get('/post/{id}/activate', 'PostController@activate')->name('post.activate');
    Route::get('/post/{id}/deactivate', 'PostController@deactivate')->name('post.deactivate');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/create', 'PostController@store')->name('post.store');
    Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
    Route::put('/post/{id}', 'PostController@update')->name('post.update');

    Route::get('/ip-addresses', 'IpAddressController@index')->name('ip-addresses.index');
    Route::get('/ip-addresses/{id}/status', 'IpAddressController@status')->name('ip-addresses.status');
    Route::post('/ip-addresses/api', 'IpAddressController@api')->name('ip-addresses.api');


    Route::get('/login-attempts', 'LoginAttemptController@index')->name('login-attempts.index');
    Route::post('/login-attempts/api', 'LoginAttemptController@api')->name('login-attempts.api');
    Route::delete('/login-attempts', 'LoginAttemptController@delete')->name('login-attempts.delete');

    Route::get('/user-agents', 'UserAgentController@index')->name('user-agents.index');
    Route::get('/user-agents/{id}/status', 'UserAgentController@status')->name('user-agents.status')->where(['id' => '[0-9]+']);
    Route::post('/user-agents/api', 'UserAgentController@api')->name('user-agents.api');

    Route::get('/visitors', 'VisitorController@index')->name('visitors.index');
    Route::post('/visitors/api', 'VisitorController@api')->name('visitors.api');

    Route::get('/visitor-panel', 'VisitorPanelController@index')->name('visitor-panel');


});

Route::group(['namespace' => 'Front'], function () {


    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('/biz-barada', 'AboutController@index')->name('front.about.index');
    /*    Route::get('/hyzmatlar', 'ServiceController@index')->name('front.service.index');*/
    Route::get('/habarlar', 'PostController@index')->name('front.post.index');
    Route::get('/habar/{slug}', 'PostController@single')->name('front.post.singleNews');
    Route::get('/hyzmat/{id}', 'ServiceController@single')->name('front.service.service_single');
    Route::get('/habarlashmak', 'ContactController@index')->name('front.contact');
    Route::get('/harytlar', 'ProductController@index')->name('front.product.index');
    Route::get('/hyzmatlar', 'ServiceController@index')->name('front.service.index');
    Route::get('/haryt/{slug}', 'ProductController@singleProduct')->name('front.product.singleProduct');
    Route::post('/sender','DashboardController@senderMail')->name('front.senderMail');





});


Route::get('/home', 'HomeController@index')->name('home');
