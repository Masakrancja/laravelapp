<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $users = [];
        $faker = Factory::create('pl_PL');
        $count = $faker->numberBetween(5, 17);

        for ($i = 0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->numberBetween(1, 1000),
                'firstName' => $faker->firstName(),
                'lastName' => $faker->lastName(),
                'age' => $faker->numberBetween(13, 49)
            ];
        }

        // $session = $request->session();
        // $session->put('prevAction', __METHOD__ . ':' . time());

        // $prevAction = $session->get('prevAction');


        // $request->session()->forget('prevAction');
        // $prevAction = $request->session()->get('prevAction');
        //$request->session()->flush(); // usunięcie całej sesji
        // $request->session()->flash('jednorazowy', 'Byłem tu'); //Usuwany przy następnym requescie. Dobry do wiadomości typu flash



        return view('users.list', ['users' => $users]);
    }

    public function show(int $userId)
    {
        $faker = Factory::create('pl_PL');

        $user = [
            'firstName' => $faker->firstName(),
            'lastName' => $faker->lastName(),
            'city' => $faker->city(),
            'age' => $faker->numberBetween(13, 22),
            'html' => '<b>BOLD TEXT</b>'
        ];

        return view('users.show', ['user' => $user]);
    }
}
