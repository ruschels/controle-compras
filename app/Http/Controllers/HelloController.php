<?php

namespace App\Http\Controllers;

class HelloController {

    public function index () {
        return view('hello.index');
    }
}