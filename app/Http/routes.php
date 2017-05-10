<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware'=>['web']], function () {

    Route::get('/', function () {
        return view('welcome2');
    })->name('home');

    Route::post('/signin',[
  'uses'=>'userController@postSignIn',
        'as'=>'signin'
    ]);

    Route::post('/signup',[
        'uses'=>'userController@postSignUp',
        'as'=>'signup'

    ]);

    Route::get('/dashboard',[
        'uses'=>'PostController@getDashboard',
        'as'=>'dashboard',
//       'middleware'=>'auth'
    ]);

    Route::post('/createpost',[
        'uses'=>'PostController@postCreatePost',
        'as'=>'post.create'

    ]);

    Route::get('auth/logout',[
        'uses'=>'userController@getLogout',
        'as'=>'logout'

    ]);

    Route::get('/delete-post/{post_id}',[
        'uses'=>'PostController@getDeletePost',
        'as'=>'post.delete'
        //'middleware'=>'auth'
    ]);


    Route::get('/adminDashboard', [
        'uses' => 'UserController@adminDashboard',
        'as' => 'adminDashboard'
    ])->middleware('auth');

    Route::get('/student', [
        'uses' => 'UserController@student',
        'as' => 'student'
    ])->middleware('auth');


    Route::get('/operator', [
        'uses' => 'UserController@operator',
        'as' => 'operator'
    ])->middleware('auth');


    Route::post('/createStudent', [

        'uses' => 'userController@createStudent',
        'as' => 'createStudent'
    ]);

    Route::post('/createLecturer', [

        'uses' => 'userController@createLecturer',
        'as' => 'createLecturer'
    ]);

    Route::post('/createOperator', [

        'uses' => 'userController@createOperator',
        'as' => 'createOperator'
    ]);



    Route::get('/lecturer', [
        'uses' => 'UserController@lecturer',
        'as' => 'lecturer'
    ])->middleware('auth');

    Route::get('/displayLecturer', [
        'uses' => 'UserController@displayLecturer',
        'as' => 'displayLecturer'
    ])->middleware('auth');


    Route::get('/lecturerDashboard', [
        'uses' => 'UserController@lecturerDashboard',
        'as' => 'lecturerDashboard'
    ])->middleware('auth');

    Route::get('/studentDashboard', [
        'uses' => 'UserController@studentDashboard',
        'as' => 'studentDashboard'
    ])->middleware('auth');

    Route::get('/operatorDashboard', [
        'uses' => 'UserController@operatorDashboard',
        'as' => 'operatorDashboard'
    ])->middleware('auth');
});
Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/search', [
    'uses' => 'UserController@search',
    'as' => 'search']);



Route::get('file_entry', 'FileEntryController@index');

Route::get('file_entry/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);


Route::post('upload','UploadController@upload');


Route::get('/get-order-ID/{student_ID}',[
    'uses'=>'courseController@getOrderID',
    'as'=>'getOrderID'

]);

Route::get('/get-lecturer-ID/{lecturer_ID}',[
    'uses'=>'courseController@getLecturerID',
    'as'=>'getLecturerID'

]);


Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');


Route::get('/get-courses/{lecturer_ID}',[
    'uses'=>'courseController@showUploadView',
    'as'=>'getCourses'

]);

Route::get('/get-student-courses/{student_ID}',[
    'uses'=>'courseController@showDownloadView',
    'as'=>'getstudentcourses'

]);


//Route::get('lecturer_ID/{lecturer_ID}/subject/{subject}', function ($lecturer_ID, $subject) {
//    'uses'=>'courseController@showUploadView',
//    'as'=>'getCourses'
//});


Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/get/{filename}', [
    'as' => 'getentry',
    'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',[
    'as' => 'addentry',
    'uses' => 'FileEntryController@add']);