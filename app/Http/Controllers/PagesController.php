<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view("home");
    }

    public function info() {
        return view("about");
    }

    public function form() {
        return view("contact");
    }
}
