<?php
Route::get('/patient','PatientController@show')->name('patient');
Route::get('/','PatientController@show');
Route::get('/study/{mrn}','StudyController@show')->name('study');
Route::post('/study','StudyController@study_post');
Route::post('/studyv2','StudyController@study_postv2');

Route::get('/diagnosis/{mrn}','StudyController@diagnosis');
Route::post('/diagnosis','StudyController@diagnosis_post');























//////////////tak guna////////////

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
