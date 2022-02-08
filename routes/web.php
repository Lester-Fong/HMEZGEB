<?php

use Illuminate\Support\Facades\Route;
 
use App\Models\User;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\TransfersController;
use App\Http\Controllers\DepositsController;
use App\Http\Controllers\TransactionsController;
 

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('logins');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vendortest',[App\Http\Controllers\HomeController::class, 'vendor'])->name('vendors');

Route::post('/userlogin', function (Request $request){
   

    $credentials = $request->only('email', 'password');
    Log::info($credentials);
    //  $accessCode = User::where('email',$request->email)->first();
    // Log::info($accessCode);

    // if (Hash::check($request->password, 'test')) {
    //     session(['adminauthenticated' => 'true']);
    //     Log::info("sod");
    // }else{
    //     Log::info("wa sod");
    // }

    
    if (Auth::attempt($credentials)) {
        // if success login
        Log::info("sod");
        session(['adminauthenticated' => 'true']);
        

        // return redirect()->intended('/dashboard');
        return redirect()->intended('/home');
    }else{
        Log::info(" wa sod");
        return redirect()->route('logins')->with('error', "Invalid user credentials.");
    }
    // if failed login

   
})->name('userlogin');

/**
 * Customer Menu
 */
Route::get('/receipt', [ReceiptController::class, 'index'])->name('receipt.index');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/deposit', [DepositController::class, 'index'])->name('deposit.index');
 

/**
 * Banking Menu
 */ 
 
Route::get('/accounts', [AccountsController::class, 'index'])->name('bank.accounts.index');
Route::get('/transfers', [TransfersController::class, 'index'])->name('bank.transfers.index');
Route::get('/transactions', [TransactionsController::class, 'index'])->name('bank.transactions');
Route::get('/deposits', [DepositsController::class, 'index'])->name('bank.deposits.index');