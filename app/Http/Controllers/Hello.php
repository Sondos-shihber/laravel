<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{

}
    Route::get('hello', function () {
    return view('hello', ['name' => 'sondos']);
});