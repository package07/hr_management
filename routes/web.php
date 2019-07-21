<?php
use App\Staff;

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
Route::get('/staff', 'StaffController@index')->name('staff');

Route::get('/staff/create', 'StaffCreateController@index')->name('staff.index');
Route::get('/staff/filter', 'StaffCreateController@filter')->name('staff.filter');
//Route::post('/dashboard/store','DashboardController@store')->name('dashboard.store');

Route::get('/staff/update/{id} ' , 'StaffCreateController@edit')->name('staff.edit');
Route::post('/staff/store', 'StaffCreateController@store')->name('staff.store');
Route::post('/staff/update', 'StaffCreateController@update')->name('staff.update');
Route::post('/staff/delete', 'StaffCreateController@delete')->name('staff.delete');
