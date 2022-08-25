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

/**APP home */
Route::get('/', [\App\Http\Controllers\CompanyController::class, 'createFirstStep'])->name('company.step.data.post');
/*
APP Post Data
*/
Route::post('company_profile/insert-company', [\App\Http\Controllers\CompanyController::class, 'postCompanyData'])->name('company.step.data.post');
