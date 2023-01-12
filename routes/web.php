<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------{{ -------------- }}--------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/changelanguage/{language}', [LocalizationController::class, 'localization']);

Route::get('/', function () {
    return view("home");
})->name('home');

// Route::fallback(function () {
//     return redirect()->route('home');
// });


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserController::class, 'index']);
    Route::get('/register', [UserController::class, 'index1']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile/{id}', [UserController::class, 'update']);
    Route::get('history', [DonationController::class, 'history']);
});

Route::group(['prefix' => 'donations'], function () {
    Route::get('/', [DonationController::class, 'index'])->name('donations.index');
    Route::middleware(['admin'])->group(function () {
        Route::get('/create', [DonationController::class, 'create'])->name('donations.create');
        Route::post('/create', [DonationController::class, 'store']);
        Route::get('/{id}/edit', [DonationController::class, 'edit'])->name('donations.edit');
        Route::post('/{id}/edit', [DonationController::class, 'update']);
        Route::post('/{id}/delete', [DonationController::class, 'destroy']);
    });
    Route::middleware(['auth'])->group(function () {
        Route::post('/{id}/donate', [DonationController::class, 'donate'])->name('donations.donate');
    });
    Route::get('/{id}', [DonationController::class, 'show']);
});

Route::group(['prefix' => 'articles'], function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::middleware('admin')->group(function () {
        Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('/create', [ArticleController::class, 'store']);
        Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
        Route::post('/{id}/edit', [ArticleController::class, 'update']);
        Route::post('/{id}/delete', [ArticleController::class, 'destroy']);
    });
    Route::get('/{id}', [ArticleController::class, 'show']);
});

Route::group(['prefix' => 'events'], function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::middleware('admin')->group(function () {
        Route::get('/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/create', [EventController::class, 'store']);
        Route::get('/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::post('/{id}/edit', [EventController::class, 'update']);
        Route::post('/{id}/delete', [EventController::class, 'destroy']);
    });
    Route::get('/{id}', [EventController::class, 'show']);
});



// Route::get('/changelanguage/{language}', [LocalizationController::class, 'localization']);

// Route::group(['middleware' => ['localization_validation']], function() {
//     Route::get('/', [EBookController::class, 'home']);

//     Route::get('/home', [EBookController::class, 'home'])->name('home');

//     Route::get('/signup', [RoleController::class, 'displaySignUp']);
//     Route::post('/insertaccount', [AccountController::class, 'insertAccount']);

//     Route::get('/login', function () {
//         return view('login');
//     });

//     Route::post('/login', [AuthController::class, 'authenticate']);

//     Route::group(['middleware' => ['auth']], function() {
//         Route::get('/logout', [AuthController::class, 'logout']);

//         Route::get('/detail/{id}', [EBookController::class, 'displayEBookDetail']);

//         Route::get('/updateprofile', [RoleController::class, 'displayProfile']);
//         Route::patch('/updateprofile/{id}', [AccountController::class, 'updateAccount']);

//         Route::get('/cart', [OrderController::class, 'displayCart']);
//         Route::post('/insertcart/{id}', [OrderController::class, 'insertOrder']);
//         Route::delete('/deletecart/{id}', [OrderController::class, 'deleteOrder']);

//         Route::get('/successorder', function () {
//             return view('successorder');
//         });

//         Route::group(['middleware' => ['security_admin']], function() {
//             Route::get('/accountmaintenance', [AccountController::class, 'displayAccountMaintenance']);

//             Route::get('/updaterole/{id}', [RoleController::class, 'displayUpdateRole']);
//             Route::patch('/updaterole/{id}', [AccountController::class, 'updateRole']);

//             Route::delete('/deleteaccount/{id}', [AccountController::class, 'deleteAccount']);
//         });
//     });
// });
