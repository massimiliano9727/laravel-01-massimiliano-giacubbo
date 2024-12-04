<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/chi-siamo', function(){
    return view('chi-siamo');
});


route::get('/contatti', function(){
    return view('contatti');
});
