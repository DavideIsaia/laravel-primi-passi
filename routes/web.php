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
    $data = [
        'name' => 'Davide',
        'lastname' => 'Isaia',
        'cart' => [
            [
                'name' => 'LG OLED Smart TV 4K 55", TV OLED Serie C1',
                'price' => 999
            ],
            [
                'name' => 'ERGONOMIC Scrivania ergonomica per studio, scrivania per computer (152.4 x 70 x 77 cm, Black)',
                'price' => 199
            ],
            [
                'name' => 'Nikon Obiettivo Nikkor AF-S DX 35 mm f/1.8G',
                'price' => 204.99
            ],
            [
                'name' => 'Amazon Basics - Confezione da 6 lampadine a LED, con attacco Edison E27, piccole, da 10 W (equivalenti a 75 W), luce bianca fredda, non dimmerabili',
                'price' => 19.24
            ],
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/user-profile', function () {
    $data = [
        'name' => 'Davide',
        'lastname' => 'Isaia',
    ];
    return view('profile', $data);
})->name('profile');