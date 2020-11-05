<?php

Auth::routes();
Route::get('/', 'Frontend\HomeController@index')->name('home');
//Route::resource('notification','NotificationController');

Route::get('/contact','Frontend\OtherspageController@contact');
Route::get('/story','Frontend\OtherspageController@story');
Route::get('/gallery','Frontend\OtherspageController@gallery');
Route::get('/item','Frontend\OtherspageController@item');
Route::get('/item/{id}','Frontend\OtherspageController@itemDetails');


/////Start The Admin Route Group
Route::group([
    'namespace'=>'Admin',
    'prefix'=>'admin'
],function (){

        Route::resource('/dashboard', 'HomeController');

        // Route for Gallery
         Route::resource('/gallery','GalleryController');
         Route::get('delete/gallery/{id}', 'GalleryController@deleteGallery')->name('delete.gallery');
         Route::get('edit/gallery/{id}', 'GalleryController@editGallery')->name('edit.gallery');
         Route::post('update/gallery/{id}', 'GalleryController@updateGallery')->name('update.gallery');

        // Route for Item
        Route::resource('/item','ItemController');
        Route::get('delete/item/{id}', 'ItemController@deleteItem')->name('delete.item');
        Route::get('edit/item/{id}', 'ItemController@editItem')->name('edit.item');
        Route::post('update/item/{id}', 'ItemController@updateItem')->name('update.item');
        Route::get('active/item/{id}', 'ItemController@active')->name('active.item');
        Route::get('deactive/item/{id}', 'ItemController@deactive')->name('deactive.item');      

});


///browser cache clear

Route::get('/clear-all', function () {

    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');

    return '<h1>Cleared Succeed</h1>'; //Return anything
});
