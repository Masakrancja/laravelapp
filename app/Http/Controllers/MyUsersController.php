<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class MyUsersController extends Controller
{
  public function list()
  {
    return view('users.list');
  }
}