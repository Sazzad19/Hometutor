<?php

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

Route::get('/','PageController@index')->name('index');
Route::get('/contact','PageController@contact')->name('contact');
Route::get('/login','PageController@login')->name('login');



Route::group(['prefix'=>'pages'],function(){

Route::group(['prefix'=>'tutor'],function(){

Route::get('/tutor-login','TutorController@login')->name('tutor.login');

Route::get('/tutor-tuitions','TutorController@index')->name('tutor.index');

Route::post('/tutor-store','TutorController@store')->name('tutor.store');

Route::get('/tutor-profile','TutorController@profile')->name('tutor.profile');

});

Route::group(['prefix'=>'guardian'],function(){

Route::get('/guardian-login','GuardianController@login')->name('guardian.login');	
Route::get('/guardian-tutors','GuardianController@index')->name('guardian.index');

Route::post('/guardian-store','GuardianController@store')->name('guardian.store');

Route::get('/tutor-details','GuardianController@details')->name('guardian.tutor-details');

Route::get('/guardian-profile','GuardianController@profile')->name('guardian.profile');

Route::get('/createtuition','TuitionController@createtuition')->name('guardian.createtuition');
Route::post('/storetuition','TuitionController@storetuition')->name('guardian.storetuition');
Route::get('/edittuition','TuitionController@edittuition')->name('guardian.edittuition');
Route::get('/updatetuition','TuitionController@updatetuition')->name('guardian.updatetuition');
Route::get('/deletetuition','TuitionController@deletetuition')->name('guardian.deletetuition');

});

Route::group(['prefix'=>'student'],function(){

Route::get('/student-tuors','StudentController@index')->name('student.index');

Route::post('/student-store','StudentController@store')->name('student.store');
});


Route::group(['prefix'=>'blog'],function(){
Route::get('/','BlogController@index')->name('blog.index');
Route::get('/blog-post','BlogController@postview')->name('blog.postview');
});


Route::get('/registrationGS',function(){
	return view('pages.registrationGS');
})->name('pages.registrationGS');





Route::get('/registrationTU',function(){
	return view('pages.registrationTU');
})->name('pages.registrationTU');
});

