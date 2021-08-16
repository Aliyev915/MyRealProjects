<?php

use App\Models\Apply;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('locale/{locale}', function ($locale) {
   Session::put('locale',$locale);
   return redirect()->back();
});
Route::get('/','HomeController@index');
Route::get('/about','AboutController@index');
Route::get('/blog','BlogController@index');
Route::get('/blog/{slug}','BlogController@detail');
Route::get('/blog/category/{category}','BlogController@category');
Route::get('/search','BlogController@search');
Route::get('/contact','ContactController@index');
Route::get('/login','AuthController@login');
Route::post('/login','AuthController@loginPost');

Route::get('/register','AuthController@register');
Route::post('/register','AuthController@registerPost');

Route::get('logout','AuthController@logout');

Route::post('/send','MessageController@send');

Route::post('/comment','CommentController@send');

Route::get('/course/{id}','CourseController@detail');


Route::get('/apply',function(Request $request){
    $validator=$request->validate([
        'name'=>'required|max:50',
        'lastname'=>'max:50',
        'email'=>'email'
    ]);
    if(!$validator)
    {
        return redirect()->back()->withErrors($validator);
    }
    Apply::create([
        'name'=>$request->name,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'read'=>false,
        'course_id'=>$request->course
    ]);
    return redirect()->back()->with('success_message','Message was succesfully sent');
});

Route::get('/certificate','CertificateController@check');
Route::get('/certificate/{code}','CertificateController@search');

Route::get('/company/{id}','CompanyController@detail');

Route::get('/subscribe','SubscribeController@subscribe');

Route::get('/confirmation',function(){
    return view('confirmation');
});


Route::prefix('admin-user')->middleware('checkUser')->group(function(){
    Route::get('/','DashboardController@index');

    // Message starts
    Route::get('/message','MessageController@index');
    Route::get('/message/detail/{id}','MessageController@detail');
    Route::get('/message/read/{id}','MessageController@read');
    // Message ends

    // Comment starts
    Route::get('/comment','CommentController@index');
    Route::get('/comment/activate/{id}','CommentController@activate');
    Route::get('/comment/delete/{id}','CommentController@delete');
    // Comment ends

    // Applies starts
    Route::get('/apply','ApplyController@index');
    Route::get('/apply/read/{id}','ApplyController@read');
    Route::get('/apply/delete/{id}','ApplyController@delete');
    // Applies ends
    Route::get('/subscribers','SubscribeController@index');
    // Non-active users starts
    Route::get('/user','UserController@index');
    Route::get('/user/activate/{id}','UserController@activate');
    Route::get('/user/delete/{id}','UserController@delete');
    // Non-active users ends
    // Settings starts
    Route::prefix('settings')->group(function(){
        Route::get('/header','SettingsController@head');
        Route::post('/header','SettingsController@headPost');

        Route::get('/about','SettingsController@about');
        Route::post('/about','SettingsController@aboutPost');

        Route::get('/statistics','SettingsController@statistics');
        Route::post('/statistics','SettingsController@statisticsPost');

        Route::get('/','BioController@index');
        Route::post('/','BioController@store');
    });
    //Settings ends

    // Slider Starts
    Route::prefix('slider')->group(function(){
        Route::get('/','SliderController@index');

        Route::get('/create','SliderController@create');
        Route::post('/create','SliderController@store');

        Route::get('/edit/{id}','SliderController@edit');
        Route::post('/edit/{id}', 'SliderController@update');

        Route::get('/delete/{id}','SliderController@delete');
        Route::post('/delete/{id}','SliderController@destroy');
    });
    //Slider Ends

    //Course Starts
    Route::prefix('course')->group(function(){
        Route::get('/','CourseController@index');

        Route::get('/create','CourseController@create');
        Route::post('/create','CourseController@store');

        Route::get('/edit/{id}','CourseController@edit');
        Route::post('/edit/{id}','CourseController@update');

        Route::get('/delete/{id}','CourseController@delete');
        Route::post('/delete/{id}','CourseController@destroy');
    });
    //Course Ends

    //Student Starts
    Route::prefix('student')->group(function(){
        Route::get('/','StudentController@index');

        Route::get('/create','StudentController@create');
        Route::post('/create','StudentController@store');

        Route::get('/edit/{id}','StudentController@edit');
        Route::post('/edit/{id}','StudentController@update');

        Route::get('/delete/{id}','StudentController@delete');
        Route::post('/delete/{id}','StudentController@destroy');
    });
    //Student Ends

    Route::prefix('certificate')->group(function(){
        Route::get('/','CertificateController@index');

        Route::get('/create','CertificateController@create');
        Route::post('/create','CertificateController@store');

        Route::get('/delete/{id}','CertificateController@delete');
    });
    //Teacher Starts
    Route::prefix('teacher')->group(function(){
        Route::get('/','TeacherController@index');

        Route::get('/create','TeacherController@create');
        Route::post('/create','TeacherController@store');

        Route::get('/edit/{id}','TeacherController@edit');
        Route::post('/edit/{id}','TeacherController@update');

        Route::get('/delete/{id}','TeacherController@delete');
        Route::post('/delete/{id}','TeacherController@destroy');
    });
    //Teacher Ends

    //Companies Starts
    Route::prefix('company')->group(function(){
        Route::get('/','CompanyController@index');

        Route::get('/create','CompanyController@create');
        Route::post('/create','CompanyController@store');

        Route::get('/edit/{id}','CompanyController@edit');
        Route::post('/edit/{id}','CompanyController@update');

        Route::get('/delete/{id}','CompanyController@delete');
        Route::post('/delete/{id}','CompanyController@destroy');
    });
    //Companies Ends

    //Categories Starts
    Route::prefix('category')->group(function(){
        Route::get('/','CategoryController@index');

        Route::get('/create','CategoryController@create');
        Route::post('/create','CategoryController@store');

        Route::get('/edit/{id}','CategoryController@edit');
        Route::post('/edit/{id}','CategoryController@update');

        Route::get('/delete/{id}','CategoryController@delete');
        Route::post('/delete/{id}','CategoryController@destroy');
    });
    //Categories Ends

    //Categories Starts
    Route::prefix('blog')->group(function(){
        Route::get('/','BlogController@blogs');

        Route::get('/create','BlogController@create');
        Route::post('/create','BlogController@store');

        Route::get('/edit/{id}','BlogController@edit');
        Route::post('/edit/{id}','BlogController@update');

        Route::get('/delete/{id}','BlogController@delete');
        Route::post('/delete/{id}','BlogController@destroy');
    });
    //Categories Ends
});
