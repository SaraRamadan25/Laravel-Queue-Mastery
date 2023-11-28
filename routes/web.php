<?php

use App\Jobs\Deploy;
use App\Jobs\ProcessPayment;
use App\Jobs\PullRepo;
use App\Jobs\runTests;
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
    //first type : chaining
    //second type : batches
    $batch = [
        new PullRepo('laracasts/project1'),
        new PullRepo('laracasts/project2'),
        new PullRepo('laracasts/project3'),
        ];

    Bus::batch($batch)
        ->allowFailures()
        ->dispatch();

    return view('welcome');
});
