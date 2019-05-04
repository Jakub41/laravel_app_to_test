<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Get Index Pages
    public function getIndex() {
      return view('pages.index');
    }
}
