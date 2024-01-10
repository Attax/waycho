<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Webman\Route;
use app\controller\IndexController;
use app\controller\TrackController;
use app\controller\CarrierController;


Route::get('/', [IndexController::class,'home']);


// carriers
Route::group('/carriers', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
 });



Route::get('/tracking',[TrackController::class,'index']);




Route::group('/en', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});

// 简体中文
Route::group('/zh-CN', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});

// 繁体中文
Route::group('/zh-TW', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});


// 西班牙语
Route::group('/es', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});

// 日语
Route::group('/ja', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});

// 法语
Route::group('/fr', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});

// 德语
Route::group('/de', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});



Route::group('/api', function () {
    Route::any('/create', function ($request) {return response('create');});
    Route::any('/edit', function ($request) {return response('edit');});
    Route::any('/view/{id}', function ($request, $id) {return response("view $id");});
});

