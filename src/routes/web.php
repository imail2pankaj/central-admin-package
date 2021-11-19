<?php

// use Illuminate\Routing\Route;

Route::prefix('admin')
    ->namespace('ScenicItSolutions\CentralAdmin\Http\Controllers')
    ->middleware(['web'])
    ->group(function () {
    
    Route::get("/", 'ContactController@index')->name("contact");
    Route::post("contact", 'ContactController@send')->name("send");

});