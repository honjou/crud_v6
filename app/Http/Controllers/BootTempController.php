<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootTempController extends Controller
{
    /*
     * Sass compile
     */
    public function getIndex2()
    {
        return view('boot_template.index2');
    }

}
