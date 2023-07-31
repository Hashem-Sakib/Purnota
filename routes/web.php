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

Route::get('/nav', function () {
    return view('navbar1');
});

Route::get('/patients/create','PatientController@create')->name('patients.create');
Route::post('/patients','PatientController@store')->name('patients.store');
Route::get('/patients/index','PatientController@index')->name('patients.index');
Route::get('/patients/{id}','PatientController@show')->name('patients.show');


Route::get('/admission/create','AdmissionController@create')->name('admissions.create');
Route::post('/admission','AdmissionController@store')->name('admissions.store');
Route::get('/admission/index','AdmissionController@index')->name('admissions.index');


Route::get('/payments/create','PaymentController@create')->name('payments.create');
Route::get('/payments/create1','PaymentController@create')->name('payments.create1');
Route::post('/payments','PaymentController@store')->name('payments.store');
Route::get('/payments/index','PaymentController@index')->name('payments.index');
Route::get('/payments/{id}','PaymentController@show')->name('payment.show');


Route::get('/packages/create','PackageController@create')->name('packages.create');
Route::post('/package','PackageController@store')->name('packages.store');
Route::get('/package/index','PackageController@index')->name('packages.index');
// Route::get('/package/{id}','PackageController@show')->name('package.show');




Route::get('/employee/create','EmployeeController@create')->name('employee.create');
Route::post('/employee','EmployeeController@store')->name('employee.store');
Route::get('/employee/index','EmployeeController@index')->name('employee.index');
Route::get('/employee/{id}','EmployeeController@show')->name('employee.show');


Route::get('/rooms/create','RoomController@create')->name('rooms.create');
Route::post('/rooms','RoomController@store')->name('rooms.store');
// Route::get('/rooms/{id}','RoomController@show')->name('rooms.show');




Route::get('/admissionstatus/create','AdmissionStatusController@create')->name('admissionstatus.create');
Route::post('/admissionstatus','AdmissionStatusController@store')->name('admissionstatus.store');
// Route::get('/admissionstatus/{id}','AdmissionStatusController@show')->name('admissionstatus.show');



Route::get('/visitors/create','VisitorController@create')->name('visitors.create');
Route::post('/visitors','VisitorController@store')->name('visitors.store');
Route::get('/visitors/index','VisitorController@index')->name('visitors.index');
// Route::get('/visitors/{id}','VisitoController@show')->name('visitors.show');


Route::get('/packageroom/create','PackagesroomsController@create')->name('packagesrooms.create');
Route::post('/packageroom','PackagesroomsController@store')->name('packagesrooms.store');
Route::get('/packageroom/index','PackagesroomsController@index')->name('packagesrooms.index');






