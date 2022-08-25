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

/**Step home */
Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
/**Step 1 */
Route::get('company_profile/create-step-one', [\App\Http\Controllers\CompanyController::class, 'createFirstStep'])->name('company.step.1');

Route::post('company_profile/insert-company', [\App\Http\Controllers\CompanyController::class, 'postCompanyData'])->name('company.step.data.post');
