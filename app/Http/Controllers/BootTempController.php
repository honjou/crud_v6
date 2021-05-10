<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootTempController extends Controller
{
    /*
     * Base
     */

    public function getIndex()
    {
        return view('boot_template.index');
    }

    /*
     * Sass compile
     */
    public function getIndex2()
    {
        return view('boot_template.index2');
    }

    /*
     * Laravel Collective
     */
    public function getIndex3()
    {
        return view('boot_template.index3');
    }

    /*
     * Laravel Collective
    */
    public function getIndex4()
    {
        return view('boot_template.index4');
    }

    /*
     * CRUD View Template
    */
    public function getIndex5()
    {
        return view('boot_template.index5');
    }

}
