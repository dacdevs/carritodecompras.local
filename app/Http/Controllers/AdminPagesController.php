<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function getDashboard(){
        return view("admin.pages.dashboard");
    }
}
