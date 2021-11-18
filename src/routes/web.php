<?php

// use Illuminate\Routing\Route;

Route::namespace('ScenicItSolutions\CentralAdmin\Http\Controllers')->
    middleware(['web'])->
    group(function () {
    
    Route::get("contact", 'ContactController@index')->name("contact");
    Route::post("contact", 'ContactController@send')->name("send");

});