<?php

use App\Http\Controllers\Admin\BranchController;

use App\Http\Controllers\Admin\StaffController;

use App\Http\Controllers\Customer\RegisterController;

use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\ShippingCalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Customer\CalculatorController;
use App\Http\Controllers\Customer\homeController;

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
    return view('Customer/welcome');
});

//Admin login
Route::post('/admin/dashboard',                                             [App\Http\Controllers\AuthController::class, 'login']);

//Staff login 
Route::post('/staff/dashboard',                                             [App\Http\Controllers\AuthController::class, 'login']);


Route::post('/customer/dashboard',                                             [App\Http\Controllers\AuthController::class, 'login']);



//Route::post('/delivery-person-dashboard',                                             [App\Http\Controllers\AuthController::class, 'login']);


//---------------------------------------------------- admin-----------------------------------------------//

//Admin login
Route::get('/admin/login',                                      [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name("admin-logout");
Route::get('/admin/dashboard',                                        [App\Http\Controllers\Admin\AdminController::class, 'dashboard']);
//Route::get('/admin/create/branch',                                        [App\Http\Controllers\Admin\AdminController::class, 'branch_create']);
//Route::get('/admin/manage/branch',                                        [App\Http\Controllers\Admin\AdminController::class, 'branch_manage']);


//Branch managemnt
Route::get('/admin/branch-create', 'App\Http\Controllers\Admin\BranchController@Create')->name('admin.branch.create');
Route::post('/getDistrict','App\Http\Controllers\Admin\BranchController@getDistrict');

Route::post('/admin/branch-toggle/{branch}', [BranchController::class, 'toggle'])->name('admin.branch.toggle');


Route::post('/admin/branch-store', 'App\Http\Controllers\Admin\BranchController@store')->name('admin.branch.store');
Route::get('/admin/branch-manage', 'App\Http\Controllers\Admin\BranchController@index')->name('admin.branch.index');
Route::get('/admin/branch-edit/{branch}', 'App\Http\Controllers\Admin\BranchController@edit')->name('admin.branch.edit');

Route::post('/admin/branch-update/{branch}', 'App\Http\Controllers\Admin\BranchController@update')->name('admin.branch.update');

Route::delete('/admin/branch-delete/{branch}', 'App\Http\Controllers\Admin\BranchController@destroy')->name('admin.branch.delete');




//Staff management
Route::get('/admin/staff-create', 'App\Http\Controllers\Admin\StaffController@create')->name('admin.staff.create');
Route::post('/admin/staff-store', 'App\Http\Controllers\Admin\StaffController@store')->name('admin.staff.store');

Route::get('/admin/staff-manage', 'App\Http\Controllers\Admin\StaffController@index')->name('admin.staff.index');
Route::get('/admin/staff-edit/{staff}', 'App\Http\Controllers\Admin\StaffController@edit')->name('admin.staff.edit');

Route::post('/admin/staff-update/{staff}', 'App\Http\Controllers\Admin\StaffController@update')->name('admin.staff.update');

Route::delete('/admin/staff-delete/{staff}', 'App\Http\Controllers\Admin\StaffController@destroy')->name('admin.staff.delete');



//Vehicle management
Route::get('/admin/vehicle-create','App\Http\Controllers\Admin\VehicleController@create')->name('admin.vehicle.create');
Route::post('/admin/vehicle-store','App\Http\Controllers\Admin\VehicleController@store')->name('admin.vehicle.store');
Route::get('/admin/vehicle-manage','App\Http\Controllers\Admin\VehicleController@index')->name('admin.vehicle.index');

Route::get('/admin/vehicle-edit','App\Http\Controllers\Admin\VehicleController@edit')->name('admin.vehicle.edit');
Route::get('/admin/vehicle-update','App\Http\Controllers\Admin\VehicleController@update')->name('admin.vehicle.update');

Route::get('/admin/vehicle-delete','App\Http\Controllers\Admin\VehicleController@destroy')->name('admin.vehicle.delete');


//Category management
Route::get('/admin/category-create','App\Http\Controllers\Admin\CategoryController@create')->name('admin.category.create');
Route::post('/admin/category-store','App\Http\Controllers\Admin\CategoryController@store')->name('admin.category.store');
Route::get('/admin/category-manage','App\Http\Controllers\Admin\CategoryController@index')->name('admin.category.index');

Route::get('/admin/category-edit/{category}','App\Http\Controllers\Admin\CategoryController@edit')->name('admin.category.edit');
Route::post('/admin/category-update/{category}','App\Http\Controllers\Admin\CategoryController@update')->name('admin.category.update');

Route::delete('/admin/category-delete/{category}', 'App\Http\Controllers\Admin\CategoryController@destroy')->name('admin.category.delete');



// Route::get('/admin/abouth-us',  [App\Http\Controllers\Admin\AuthController::class, 'abouth'])->middleware('admin');

//-------------------------------------------------------------- admin---------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//




// Cashier



//Customer
Route::get('/customer/login',                                 [App\Http\Controllers\Customer\AuthController::class, 'login'])->name("customer-logout");
Route::get('/customer/login-check',                           [App\Http\Controllers\Customer\AuthController::class,'login_check']);

Route::get('/customer/dashboard',                             [App\Http\Controllers\Customer\AuthController::class, 'dashboard']);
Route::get('/customer/register',                              [App\Http\Controllers\Customer\AuthController::class, 'register']);
Route::post('/customer/create',                               [App\Http\Controllers\Customer\AuthController::class, 'create_customer']);

Route::get('/customer/rate-calculator',                       [App\Http\Controllers\Customer\ShippingCalculatorController::class,'viewController']);
Route::post('/customer/check-area',                            [App\Http\Controllers\Customer\ShippingCalculatorController::class,'calculateDeliveryCost']);

Route::get('/customer/create-pickup',                            [App\Http\Controllers\Customer\OrderController::class, 'create_pickup']);
Route::post('/customer/calculate/delivery-cost',                  [App\Http\Controllers\Customer\pickupController::class, 'delivery_cost']);
Route::post('/customer/pickup-store',                             [App\Http\Controllers\Customer\pickupController::class, 'pickup_store']);

Route::get('/customer/tracking',                            [App\Http\Controllers\Customer\AuthController::class, 'tracking']);


Route::get('customer/home',[homeController::class,'home']);



Route::post('/customer/pickup',                            [App\Http\Controllers\Customer\AuthController::class, 'registerCustomer']);
Route::post('/customer/view-pickup',                            [App\Http\Controllers\Customer\AuthController::class, 'registerCustomer']);





//Dispatcher
Route::get('/dispatcher-logout',                                      [App\Http\Controllers\Dispatcher\AuthController::class, 'logout'])->name("dispatcher-logout");
Route::get('/dispatcher/dashboard',                                        [App\Http\Controllers\Dispatcher\AuthController::class, 'dashboard'])->middleware('dispatcher');
Route::get('/dispatcher/abouth-us',                                   [App\Http\Controllers\Dispatcher\AuthController::class, 'abouthUs'])->middleware('dispatcher');



//Delivery person

Route::get('/delivery-login',                                      [App\Http\Controllers\DeliveryPerson\AuthController::class, 'logout']);
Route::get('/delivery-dashboard',                                      [App\Http\Controllers\DeliveryPerson\AuthController::class, 'dashboard']);


//Stockkeepr
Route::get('/stockkeeper-login',                                      [App\Http\Controllers\DeliveryPerson\AuthController::class, 'logout']);
Route::get('/delivery-dashboard',                                      [App\Http\Controllers\DeliveryPerson\AuthController::class, 'dashboard']);
