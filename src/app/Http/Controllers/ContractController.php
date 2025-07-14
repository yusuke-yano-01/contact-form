<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
  {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    return view('confirm');
  }
}
