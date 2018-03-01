<?php

Route::group(['prefix' => 'rasio-puspoltu'], function() {
    Route::get('demo', 'Bantenprov\RasioPusPoltu\Http\Controllers\RasioPusPoltuController@demo');
});
