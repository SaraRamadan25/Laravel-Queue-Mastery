<?php

use App\Jobs\Deploy;
use App\Jobs\ProcessPayment;
use App\Jobs\PullRepo;
use App\Jobs\runTests;
use App\Models\User;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {

   /* \Illuminate\Support\Facades\DB::transaction(function () {
    $user = User::factory()->create();
    \App\Jobs\SendWelcomeEmail::dispatch($user)->afterCommit();
    });*/

    \App\Jobs\TestJob::dispatch('this is a secret');
    return view('welcome');
});

