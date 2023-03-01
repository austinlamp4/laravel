<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing; //This is allowed because we used the namespace;

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

Route::get('/', function() {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

/*
Author: Austin Lamp
Date: 02/03/23
Edited: 03/01/23
Description: The below is a route that gets and displays a single listing instead of all of the listings.
*/
Route::get('/listing/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
}) -> where('id','[0-9]+');