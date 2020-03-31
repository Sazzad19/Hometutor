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
Route::post('/recommend-to-guardian','SendEmailController@recommend_to_guardian_email')->name('recommendguardian');
Route::get('/email','SendEmailController@index')->name('email');




Route::group(['prefix'=>'tutor'],function(){
Route::post('/tutor-store','TutorController@store')->name('tutor.store');	

Route::group(['middleware'=>['checkuserlogin']],function(){

Route::get('/tutor-tuitions','TutorController@index')->name('tutor.index');



Route::post('/tutor-feedback','GuardianreviewsController@storefeedback')->name('tutor.feedback');

Route::get('/guardian-details/{id}','TutorController@guardiandetails')->name('tutor.guardian-details');
Route::post('/updateprofile/{id}','ProfileController@updatetutorprofile')->name('tutor.updateprofile');
Route::get('/search','TutorController@search')->name('tutor.search');
});
});

Route::group(['prefix'=>'guardian'],function(){
Route::post('/guardian-store','GuardianController@store')->name('guardian.store');
Route::group(['middleware'=>['checkuserlogin']],function(){
	
Route::get('/guardian-tutors','GuardianController@index')->name('guardian.index');

Route::get('/tutor-details/{id}','GuardianController@tutordetails')->name('guardian.tutor-details');

Route::post('/updateprofile/{id}','ProfileController@updateguardianprofile')->name('guardian.updateprofile');

Route::get('/profilePDF/{id}','GuardianController@printPDF')->name('guardian.profilePDF');

Route::get('/tuitionlist/{id}','TuitionController@tuitionlist')->name('guardian.tuitionlist');

Route::get('/createtuition','TuitionController@createtuition')->name('guardian.createtuition');

Route::post('/storetuition','TuitionController@storetuition')->name('guardian.storetuition');
Route::get('/edittuition/{id}','TuitionController@edittuition')->name('guardian.edittuition');

Route::post('/updatetuition/{id}','TuitionController@updatetuition')->name('guardian.updatetuition');

Route::get('/deletetuition/{id}','TuitionController@deletetuition')->name('guardian.deletetuition');

Route::post('/guardian-feedback','TutorreviewsController@storefeedback')->name('guardian.feedback');

Route::get('/search','GuardianController@search')->name('guardian.search');

});
});

Route::group(['prefix'=>'student'],function(){ 
Route::post('/student-store','StudentController@store')->name('student.store');
Route::group(['middleware'=>['checkuserlogin']],function(){

Route::get('/student-tuors','StudentController@index')->name('student.index');



Route::post('/updateprofile/{id}','ProfileController@updatestudentprofile')->name('student.updateprofile');

Route::get('/tutor-details/{id}','StudentController@tutordetails')->name('student.tutor-details');

});



});

Route::group(['prefix'=>'blog'],function(){
Route::get('/','BlogController@index')->name('blog.index');
Route::get('/blog-post/{id}','BlogController@postview')->name('blog.postview');
Route::post('/store','BlogController@storepost')->name('blog.store');
Route::get('/blog-category/{id}','BlogController@category_posts')->name('blog.category');
});


Route::get('/registrationGS','StudentController@registrationpage')->name('pages.registrationGS');





Route::get('/registrationTU',function(){
	return view('pages.registrationTU');
})->name('pages.registrationTU');


Route::group(['prefix'=>'admin'],function(){
Route::get('/login-form','AdminController@loginform')->name('admin.loginform');
Route::post('/login','AdminController@login')->name('admin.login');

Route::group(['middleware'=>['checkadminlogin']],function(){

Route::get('/login','AdminController@logout')->name('admin.logout');
Route::get('/','AdminController@index')->name('admin.index');

Route::get('/tutorlist','AdminController@tutorlist')->name('admin.tutorlist');
Route::get('/approve_tutor/{id}','AdminController@tutor_approval')->name('admin.tutor.approve');
Route::get('/delete_tutor/{id}','AdminController@tutor_destroy')->name('admin.tutor.destroy');
Route::get('/tutionlist','AdminController@tuitionlist')->name('admin.tutionlist');
Route::get('/approve_tuition/{id}','AdminController@tuition_approval')->name('admin.tuition.approve');
Route::get('/delete_tuition/{id}','AdminController@tution_destroy')->name('admin.tuition.destroy');

});
});
