<?php

Illuminate\Support\Facades\Route::get('/{any}', fn() => view('home'))->where('any', '.*');