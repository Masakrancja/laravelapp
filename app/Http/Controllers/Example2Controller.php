<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class Example2Controller extends Controller
{
  public function get() 
  {
    return view('example2.example2', ['title' => 'Jestem GET']);
  }

  public function post() 
  {
    return view('example2.example2', ['title' => 'Jestem POST']);
  }

  public function put() 
  {
    return view('example2.example2', ['title' => 'Jestem PUT']);
  }

  public function delete() 
  {
    return view('example2.example2', ['title' => 'Jestem DELETE']);
  }

  public function options() 
  {
    return view('example2.example2', ['title' => 'Jestem OPTIONS']);
  }

}