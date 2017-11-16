<?php
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/user', function () {
        return ['data' => auth()->user()];
    });

    //USER
    Route::get('users', 'UsersController@index');
    Route::post('users', 'UsersController@store');
    Route::put('users/{user}', 'UsersController@update');
    Route::delete('users/{user}', 'UsersController@destroy');
    
    //TYPEUSER
    Route::get('typeUser', 'TypeUserController@index');
    Route::post('typeUser', 'TypeUserController@store');
    Route::put('typeUser/{typeUser}', 'TypeUserController@update');
    Route::delete('typeUser/{typeUser}', 'TypeUserController@destroy');
    
});
