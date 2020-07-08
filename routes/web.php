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


Route::get('/',"frontendController@indexRicipes");
Route::get('post{id}',"frontendController@detailsRicipes");

Route::get('generalRecipes',"frontendController@generalRecipes");
Route::get('healthyRecipes',"frontendController@healthyRecipes");
Route::get('recipesForKids',"frontendController@recipesForKids");

Route::get('about',"frontendController@about");
Route::get('contact',"frontendController@contact");
Route::get('storeContact',"frontendController@storeContact");

Route::get('bestRestorant',"frontendController@bestRestorant");
Route::get('restorant{id}',"frontendController@restorant");
Route::get('searchRestorant',"frontendController@searchRestorant");

////////////////////// dashboard ////////////////////////////////

Route::get('returnToHome',"dashboardController@returnToHome");

Route::get('creatRecipe',"dashboardController@creatRecipe")->middleware('auth');
Route::get('storeRecipe',"dashboardController@storeRecipe")->middleware('auth');
Route::get('post{id}',"frontendController@detailsRicipes")->middleware('auth');
Route::get('deletePost{id}',"dashboardController@deletePost")->middleware('auth');

Route::get('usersContacts',"dashboardController@usersContacts")->middleware('auth');
Route::get('detailsUsersContacts{id}',"dashboardController@detailsUsersContacts")->middleware('auth');
Route::get('deleteUsersContacts{id}',"dashboardController@deleteUsersContacts")->middleware('auth');

Route::get('creatRestorant',"dashboardController@creatRestorant")->middleware('auth');
Route::get('storeRestorant',"dashboardController@storeRestorant")->middleware('auth');
Route::get('deleteRestorant{id}',"dashboardController@deleteRestorant")->middleware('auth');
Route::get('detailsRestorant{id}',"dashboardController@detailsRestorant")->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');