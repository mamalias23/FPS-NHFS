<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('debt-management', function()
{
	return View::make('debt-management');
});

Route::get('trust-deeds', function()
{
	return View::make('trust-deeds');
});

Route::get('individual-voluntary-arrangements', function()
{
	return View::make('individual-voluntary-arrangements');
});

Route::get('debt-arrangement-schemes', function()
{
	return View::make('debt-arrangement-schemes');
});

Route::get('full-finals', function()
{
	return View::make('full-finals');
});

Route::get('budgeting-tool', function()
{
	return View::make('budgeting-tool');
});

Route::get('terms-and-conditions', function()
{
	return View::make('terms-and-conditions');
});
