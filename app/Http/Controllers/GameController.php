<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $games = [];
        $faker = Factory::create('pl_PL');
        $count = $faker->numberBetween(6, 32);
        $categories = $faker->words(7);
        for ($i = 0; $i < $count; $i++) {
            $games[] = [
                'id' => $i + 1,
                'title' => $faker->sentence(),
                'category' => $categories[$faker->numberBetween(0, 6)],
                'year' => $faker->numberBetween(1990, 2024),
            ];
        }

        $succes = (bool) $faker->numberBetween(0, 1);

        $request->session()->flash('success', $succes);


        return view('games.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, int $id)
    {
        $faker = Factory::create('pl_PL');
        $game = [
            'id' => $id,
            'title' => $faker->sentence(),
            'category' => $faker->word(),
            'year' => $faker->numberBetween(1990, 2024),
        ];
        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
