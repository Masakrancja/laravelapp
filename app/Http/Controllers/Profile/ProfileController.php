<?php
declare(strict_types=1);

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public function show()
  {
    return view('users.profile');
  }
}