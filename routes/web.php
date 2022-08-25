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

Route::get('/', function () {
    return view('welcome');
});
Route::get('company_profile', 'CompanyController@index')->name('company_profile.index');
Route::get('company_profile/create-step-one', 'CompanyController@createStepOne')->name('company_profile.create.step.one');
Route::post('company_profile/create-step-one', 'CompanyController@postCreateStepOne')->name('company_profile.create.step.one.post');
Route::get('company_profile/create-step-two', 'CompanyController@createStepTwo')->name('company_profile.create.step.two');
Route::post('company_profile/create-step-two', 'CompanyController@postCreateStepTwo')->name('company_profile.create.step.two.post');
Route::get('company_profile/create-step-three', 'CompanyController@createStepThree')->name('company_profile.create.step.three');
Route::post('company_profile/create-step-three', 'CompanyController@postCreateStepThree')->name('company_profile.create.step.three.post');
