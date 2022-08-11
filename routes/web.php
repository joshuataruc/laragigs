<?php

use Illuminate\Support\Facades\Route;

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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
           [
                'id' => 1,
            'title' => 'Listing one',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta aliquid necessitatibus dolorem id, quis enim quos, vero fugiat maxime facilis, eaque non quaerat? Natus quibusdam laboriosam ea, mollitia ullam commodi, perspiciatis tempore quo minus quia iusto velit quae aliquid fugit, iure reprehenderit asperiores dolores rerum illo id! Impedit, autem.'
           ],
           [
                'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta aliquid necessitatibus dolorem id, quis enim quos, vero fugiat maxime facilis, eaque non quaerat? Natus quibusdam laboriosam ea, mollitia ullam commodi, perspiciatis tempore quo minus quia iusto velit quae aliquid fugit, iure reprehenderit asperiores dolores rerum illo id! Impedit, autem.'
           ],
           [
                'id' => 3,
            'title' => 'Listing Three',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta aliquid necessitatibus dolorem id, quis enim quos, vero fugiat maxime facilis, eaque non quaerat? Natus quibusdam laboriosam ea, mollitia ullam commodi, perspiciatis tempore quo minus quia iusto velit quae aliquid fugit, iure reprehenderit asperiores dolores rerum illo id! Impedit, autem.'
           ]
        ]
    ]);
});
