<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
//    public function __construct()
//    {
//        echo "<h1 align='center'>Im first created page</h1>";
//    }

    public $person = [];

    public function __invoke()
    {
        $secret = 42;
        $this->person['town'] = 'Ukraine, Kyiv';
        $this->person['first'] = 'Yaroslav';
        $this->person['second'] = 'Salata';

        echo "<h1>My first created laravel page </h1>";

        ///ToDO: ask for most comfortable way 2 send data
        return view('pages.about', $this->person, compact('town'))->with('secret', $secret);
    }
}


