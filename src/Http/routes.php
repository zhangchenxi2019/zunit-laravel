<?php
Route::get('/', 'ZunitController@index');
Route::post('/', 'ZunitController@store')->name('junit.store');

// 测试路由
Route::get('/test', 'TestController@index');
