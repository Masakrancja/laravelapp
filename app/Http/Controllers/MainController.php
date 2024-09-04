<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  public function __invoke()
  {
    return view('layout.main');

    // $db = DB::connection()->getPdo();
    // dump($db);

    // $now = Date(DATE_ISO8601);

    // DB::table('genres')->truncate();

    // DB::table('genres')->insert(
    //   [
    //     'name' => 'RPG',
    //     'created_at' => $now,
    //     'updated_at' => $now,
    //   ]
    // );

    // DB::table('genres')->insert([
    //   [
    //     'name' => 'Adventure',
    //     'created_at' => $now,
    //     'updated_at' => $now,
    //   ],
    //   [
    //     'name' => 'FPP',
    //     'created_at' => $now,
    //     'updated_at' => $now,
    //   ]
    // ]);

    // DB::table('genres')
    //   ->where('name', 'Adventure')
    //   ->update(['name' => 'Sport']);

    // DB::table('genres')
    //   ->where(['id' => 1])
    //   ->delete();

  }
}