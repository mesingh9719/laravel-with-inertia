<?php

use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $monitors = Monitor::paginate(10);

    return Inertia::render('Home',[
        'monitors' => $monitors
    ]);
});

Route::get('about', function () {
    return Inertia::render('About');
});

Route::get('contact', function () {
    return Inertia::render('Contact');
});


Route::get('/test',function(){
    return Inertia::render('Test');
});

Route::get('login', function () {
    return Inertia::render('Login');
});

Route::get('site/create', function () {
    return Inertia::render('Site/Create');
});

Route::post('auth/login',function (Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return Inertia::location('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
});
