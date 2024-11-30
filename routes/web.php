<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

function getUser(){
    return
    [ 
        1 => ['name' => 'mustafa' , 'phone' => '23840292' , 'zip' => '92'],
        2 => ['name' => 'murtaza' , 'phone' => '2384033292' , 'zip' => '91'],
        3 => ['name' => 'haider' , 'phone' => '2384029233' , 'zip' => '90']
    ];
}

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('about');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/mustafa','showMustafa')->name('mustafa');
    Route::get('/murtaza','showMurtaza')->name('murtaza');
    Route::get('/haider','showHaider')->name('haider');
    Route::get('/faraz','showFaraz')->name('faraz');
    Route::get('/hammad/{id}','showHammad')->name('hammad');
});

// Route::resource('/user',UserController::class);



// Route::get('/users', function () {
   
//     $name = getUser();

//     return view(
//         'users',['user' => $name , 'city' => 'karachi']
//     );

    // return view('users')
    // ->with("user" , $name)
    // ->with("city" , 'karachi');

    // return view('users')
    // ->withUser($name)
    // ->withCity('karachi');
    
//});

// Route::get('/user/{id}', function ($id) {
//     $users = getUser();
//     abort_if(!isset($users[$id]),404);
//     $user = $users[$id];
//     return view('user' ,['id' => $user]);
// })->name('userid');


// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null , string $commentid = null) {
//     if($id){
//         return "<h1>Post ID : ". $id ."</h1> <h2>This is comment id : ". $commentid . "</h2>" ;
//     }
//     else{
//         return "<h1> No Id found</h1>";
//     }
// })->wherenumber('id')->wherein('commentid',['this','and','not']);

// Route::resource('courses', CourseController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/test', function () {
//     return view('about');
// })->name('about');

// Route::redirect('/about','/test');

// Route::prefix('page')->group(function() {

//     Route::get('/chat/' , function() {
//         return "<h1>This is chat page</h1>";
//     });
    
//     Route::get('/call/' , function() {
//         return "<h1>This is call page</h1>";
//     });
    
//     Route::get('/ads/' , function() {
//         return "<h1>This is ads page</h1>";
//     });
    
// });



// Route::fallback(function() {
//     return "<h1>Page not found</h1>";
// });

// Route::get('/greeting', function () {
//     return view('greeting');
// })->name('greeting');

// Route::get('/registers', function () {
//     return view('registers');
// })->name('register');

// Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

// Route::view('/logins', function () {
//     return view('logins');
// })->name('logins');

// Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');
// Route::get('welcome',[UserController::class,'welcome'])->name('welcome');

Route::resource('website',WebsiteController::class);

require __DIR__.'/auth.php';
