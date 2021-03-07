<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    public function getIndex()
    {
        return view('boot_template.index');
    }}
