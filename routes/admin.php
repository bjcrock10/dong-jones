<?php

Route::get('/home', 'Admin\HomeController@index')->name('home');

/**
 * ROLES
 */
 Route::get('/role/{role}/permissions','Admin\RoleController@permissions');
 Route::get('/rolePermissions','Admin\RoleController@rolePermissions')->name('myrolepermission');
 Route::get('/roles/all','Admin\RoleController@all');
 Route::post('/assignPermission','Admin\RoleController@attachPermission');
 Route::post('/detachPermission','Admin\RoleController@detachPermission');
 Route::resource('/roles','Admin\RoleController');

 /**
  * PERMISSIONs
  */
 Route::get('/permissions/all','Admin\PermissionController@all');
 Route::resource('/permissions','Admin\PermissionController');


 /**
 * ADMINs
 */
Route::get('/profile','Admin\AdminController@profileEdit');
Route::put('/profile/{admin}','Admin\AdminController@profileUpdate');
Route::put('/changepassword/{admin}','Admin\AdminController@changePassword');
Route::put('/administrator/status','Admin\AdminController@switchStatus');
Route::post('/administrator/removeBulk','Admin\AdminController@destroyBulk');
Route::put('/administrator/statusBulk','Admin\AdminController@switchStatusBulk');
Route::resource('/administrator','Admin\AdminController');

//Members Route
Route::get('/memberlist','Admin\AdminController@memberslistindex');
Route::get('/member','Admin\AdminController@memberdashboard');
Route::get('/postsdata','Admin\MembersController@postsdata');
Route::post('/createmember','Admin\MembersController@store')->name('createmember');
Route::post('/editmember/{id}','Admin\MembersController@update');
Route::post('/removemember/{id}','Admin\MembersController@destroy');
Route::get('/getmemberinfo/{id}','Admin\MembersController@getinfo');
//End of Members route

Route::get('/loanlist','Admin\AdminController@loanlistindex');

Route::get('/agencylist','Admin\AdminController@agencylistindex');

Route::get('/loan-type','Admin\AdminController@loantypelistindex');



/**
 * USERS
 */
Route::put('/user/status','Admin\UserController@switchStatus');
Route::post('/user/removeBulk','Admin\UserController@destroyBulk');
Route::put('/user/statusBulk','Admin\UserController@switchStatusBulk');
Route::get('/user/{id}/cellar','Admin\UserController@showUserCellar');
Route::resource('/user','Admin\UserController');

