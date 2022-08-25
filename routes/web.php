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

/**Step 1 */
Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company_profile.index');
/**Step 2 */
Route::get('company_profile/create-step-one', [\App\Http\Controllers\CompanyController::class, 'createStepOne'])->name('company.step.1');
Route::post('company_profile/create-step-one', [\App\Http\Controllers\CompanyController::class, 'postCreateStepOne'])->name('company.step.1.post');
/**Step 3 */
Route::get('company_profile/create-step-two', [\App\Http\Controllers\CompanyController::class, 'createStepTwo'])->name('company.step.2');
Route::post('company_profile/create-step-two', [\App\Http\Controllers\CompanyController::class, 'postCreateStepTwo'])->name('company.step.2.post');
/**Step 4 */
Route::get('company_profile/create-step-three', [\App\Http\Controllers\CompanyController::class, 'createStepThree'])->name('company.step.3');
Route::post('company_profile/create-step-three', [\App\Http\Controllers\CompanyController::class, 'postCreateStepThree'])->name('company.step.3.post');
