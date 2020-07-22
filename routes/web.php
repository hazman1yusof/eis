<?php
Route::get('/study/{idno}','StudyController@show')->name('study');
Route::post('/study','StudyController@study_post');//xguna
Route::post('/studyv2','StudyController@study_postv2');

Route::post('/diagnosis','StudyController@diagnosis_post');



Route::get('/patient_ajax','PatientController@ajax');
Route::get('/','PatientController@show');
Route::get('/patient','PatientController@show')->name('patient');
Route::get('/patient/{id}','PatientController@edit_patient');
Route::post('/patient/{id}','PatientController@store_patient');
Route::get('/new_patient','PatientController@new_patient');
Route::post('/new_patient','PatientController@add_patient');


Route::get('/login','SessionController@show');
Route::post('/login','SessionController@login')->name('login');
Route::get('/logout','SessionController@destroy')->name('logout');

Route::get('/userlist','UserController@index')->name('userlist');
Route::get('/user/{id}','UserController@edit')->name('user');
Route::post('/user/{id}','UserController@update');
Route::get('/user','UserController@create');
Route::post('/user','UserController@store');
Route::get('/user/delete/{id}','UserController@destroy');

// Route::get('/patmast','PatmastController@patmast');

// Route::get('/patmast_test','PatmastController@test');




















//////////////tak guna////////////

// Route::get('home', function() {
//     return redirect(route('admin.dashboard'));
// });

// Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
//     Route::get('dashboard', 'DashboardController')->name('dashboard');

//     Route::get('users/roles', 'UserController@roles')->name('users.roles');
//     Route::resource('users', 'UserController', [
//         'names' => [
//             'index' => 'users'
//         ]
//     ]);
// });

// Route::middleware('auth')->get('logout', function() {
//     Auth::logout();
//     return redirect(route('login'))->withInfo('You have successfully logged out!');
// })->name('logout');

// Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// // Get authenticated user
// Route::get('users/auth', function() {
//     return response()->json(['user' => Auth::check() ? Auth::user() : false]);
// });
