<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class BuilderController extends Controller
{

    /**
     * Display dashboard
     *  */
    public function dashboard(): View
    {
        // $games = DB::table('games')
        //     ->join('genres', 'games.genres_id', '=', 'genres.id')
        //     ->select('games.id', 'title', 'publication_date', 'rate', 'genres.name')
        //     ->get()
        //     ->toArray();

        $stats = [
            'max' => DB::table('games')->max('rate'),
            'min' => DB::table('games')->min('rate'),
            'count' => DB::table('games')->count(),
            'avg' => DB::table('games')->avg('rate'),
        ];
        return view('games.builder.dashboard', ['stats' => $stats]);
    }


    /**
     * Display a listing of the resource.
     */
    public function list(): View
    {
        $games = DB::table('games')
            ->select(['games.id', 'games.title', 'games.genres_id', 'games.rate', 'genres.name'])
            ->join('genres', 'genres.id', '=', 'games.genres_id')
            ->simplePaginate(10);

        return view(
            'games.builder.list',
            [
                'games' => $games,
                'currentPage' => $games->currentPage(),
                'count' => $games->count()
            ]
        );

        // $games = [];
        // $faker = Factory::create('pl_PL');
        // $count = $faker->numberBetween(6, 32);
        // $categories = $faker->words(7);
        // for ($i = 0; $i < $count; $i++) {
        //     $games[] = [
        //         'id' => $i + 1,
        //         'title' => $faker->sentence(),
        //         'category' => $categories[$faker->numberBetween(0, 6)],
        //         'year' => $faker->numberBetween(1990, 2024),
        //     ];
        // }

        // $succes = (bool) $faker->numberBetween(0, 1);

        // $request->session()->flash('success', $succes);
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
    public function show(int $id): View
    {
        $game = DB::table('games')
            ->select('id', 'title', 'description', 'publication_date', 'rate')
            ->where('id', $id)
            ->first();

        return view('games.builder.show', ['game' => $game]);

        // $faker = Factory::create('pl_PL');
        // $game = [
        //     'id' => $id,
        //     'title' => $faker->sentence(),
        //     'category' => $faker->word(),
        //     'year' => $faker->numberBetween(1990, 2024),
        // ];
        // return view('games.show', ['game' => $game]);
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
