<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trademark;

class TrademarkController extends Controller
{
    public function index() {

      $trademarks = Trademark::all();
      return view('pages.home', compact('trademarks'));

    }

    public function show($id) {

      $trademark = Trademark::findOrFail($id);
      return view('pages.trademark', compact('trademark'));

    }
}
