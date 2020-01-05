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
Route::post('/login-post','PageController@loginpost')->name('login.post');
Route::get('/logout','PageController@logout')->name('logout');

Route::get('/my-profile','ProfileController@profile')->name('profile');
Route::post('/send-to-tutor','SendEmailController@send_to_tutor_email')->name('sendemailtutor');
Route::post('/send-to-guardian','SendEmailController@send_to_guardian_email')->name('sendemailguardian');
Route::get('/email','SendEmailController@index')->name('email');


Route::group(['prefix'=>'pages'],function(){

Route::group(['prefix'=>'tutor'],function(){



Route::get('/tutor-tuitions','TutorController@index')->name('tutor.index');

Route::post('/tutor-store','TutorController@store')->name('tutor.store');

Route::post('/tutor-feedback','GuardianreviewsController@storefeedback')->name('tutor.feedback');

Route::get('/guardian-details/{id}','TutorController@guardiandetails')->name('tutor.guardian-details');
Route::post('/updateprofile/{id}','ProfileController@updatetutorprofile')->name('tutor.updateprofile');
Route::post('/search','TutorController@search')->name('tutor.search');

});

Route::group(['prefix'=>'guardian'],function(){

	
Route::get('/guardian-tutors','GuardianController@index')->name('guardian.index');

Route::post('/guardian-store','GuardianController@store')->name('guardian.store');

Route::get('/tutor-details/{id}','GuardianController@tutordetails')->name('guardian.tutor-details');

Route::post('/updateprofile/{id}','ProfileController@updateguardianprofile')->name('guardian.updateprofile');

Route::get('/profilePDF/{id}','GuardianController@printPDF')->name('guardian.profilePDF');

Route::get('/tuitionlist/{id}','TuitionController@tuitionlist')->name('guardian.tuitionlist');

Route::get('/createtuition','TuitionController@createtuition')->name('guardian.createtuition');

Route::post('/storetuition','TuitionController@storetuition')->name('guardian.storetuition');
Route::get('/edittuition','TuitionController@edittuition')->name('guardian.edittuition');

Route::get('/updatetuition','TuitionController@updatetuition')->name('guardian.updatetuition');

Route::get('/deletetuition','TuitionController@deletetuition')->name('guardian.deletetuition');

Route::post('/guardian-feedback','TutorreviewsController@storefeedback')->name('guardian.feedback');

Route::post('/search','GuardianController@search')->name('guardian.search');

});

Route::group(['prefix'=>'student'],function(){

Route::get('/student-tuors','StudentController@index')->name('student.index');

Route::post('/student-store','StudentController@store')->name('student.store');

Route::post('/updateprofile/{id}','ProfileController@updatestudentprofile')->name('student.updateprofile');

});


Route::group(['prefix'=>'blog'],function(){
Route::get('/','BlogController@index')->name('blog.index');
Route::get('/blog-post','BlogController@postview')->name('blog.postview');
Route::post('/store','BlogController@storepost')->name('blog.store');
});


Route::get('/registrationGS','StudentController@registrationpage')->name('pages.registrationGS');





Route::get('/registrationTU',function(){
	return view('pages.registrationTU');
})->name('pages.registrationTU');
});

Route::group(['prefix'=>'admin'],function(){

Route::get('/',function(){
	return view('admin.pages.index');
})->name('admin.index');

});
