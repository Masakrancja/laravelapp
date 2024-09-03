<?php
declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class MyUsersController extends Controller
{
  public function list(Request $request)
  {
    return view('users.list');
  }

  public function testShow(Request $request, int $id)
  {
    // $path = $request->path();
    // $uri = $request->getRequestUri();
    // $url = $request->url();
    // $fullUrl = $request->fullUrl();

    // $name = $request->input('games.1');
    // dump($name);

    // if ($request->isMethod('GET')) {
    //   dump('GET');
    // }

    // dump($path, $uri, $url, $fullUrl);

    //return '<h2>To jest zwykly tekst ' . $id . '</h2>';

    // return new Response(
    //   '<h2>To jest odpowiedź z serwera: ' . $id . '</h2>',
    //   200,
    //   ['Content-type'=> 'text/plain']
    // );

    // return response(
    //   '<h2>To jest odpowiedź z serwera: ' . $id . '</h2>',
    //   200,
    //   ['Content-type'=> 'text/plain']
    // );

    // return response('<h4>Odpowiedź z serwera: ' . $id . '</h4>')
    //       ->setStatusCode(200)
    //       ->header('Content-type', 'text/html')
    //       ->header('myHeader', 'Lalalala');

    //return redirect('xxxx');

    //return redirect()->route('get.users');

    // return redirect()->route('user.showAddress', ['id' => $id]);

    //return redirect()->action([MyUsersController::class, 'list']);

    // return response()->view('users.profile', ['id' => 3], 201)
    // ->header('NewHeader','MyNewHeader');

    //return response()->json(['id' => $id]); 

    return view('users.show', ['id' => $id]);

  }

  public function testStore(Request $request, int $id)
  {
    dd('testStore');
  }
}