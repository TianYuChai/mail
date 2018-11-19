<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Index\IndexController@index');


/**
 * 后台业务路由
 * 后期加入auth
 */
Route::get('/mailAdmin', 'Admin\AdminController@index');

Route::get('/index', 'Admin\Goods\ShopController@index')->name('shop.list');

resource('fenlei', 'Admin\Fenlei\ClassIfIcaTionController');