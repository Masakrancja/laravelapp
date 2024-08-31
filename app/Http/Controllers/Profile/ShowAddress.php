<?php
declare(strict_types=1);

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use Faker\Factory;

class ShowAddress extends Controller
{
  public function __invoke(int $id)
  {
    $faker = Faker\Factory::create();
    $address = [
      'postalCode' => $faker->postalCode
    ];

    dd($address);

  }
}