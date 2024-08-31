<?php
declare(strict_types=1);

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use Faker\Factory;

class ShowAddress extends Controller
{
  public function __invoke(int $id)
  {
    $faker = Factory::create('pl_PL');
    $address = [
      'street' => $faker->streetName(),
      'number' => $faker->numberBetween(1,100),
      'flat' => $faker->numberBetween(1,100),
      'postalCode' => $faker->postcode(),
      'city' => $faker->city(),
    ];
    return view('users.showAddress', ['address' => $address]);
  }
}