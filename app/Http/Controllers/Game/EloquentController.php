<?php

namespace App\Http\Controllers\Game;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class EloquentController extends Controller
{

    /**
     * Display dashboard
     *  */
    public function dashboard(): View
    {
        //$games = Game::all();
        //$games = Game::where('rate', '>', 9)->get();

        //po zdefiniowaniu scopesa w modelu:
        //$games = Game::best()->get();

        $stats = [
            'max' => Game::max('rate'),
            'min' => Game::min('rate'),
            'count' => Game::count(),
            'avg' => Game::avg('rate'),
        ];
        return view('games.eloquent.dashboard', ['stats' => $stats]);
    }


    /**
     * Display a listing of the resource.
     */
    public function list(): View
    {
        // $games = DB::table('games')
        //     ->select(['id', 'title', 'genres_id', 'rate'])
        //     ->simplePaginate(10);

        $games = Game::with('genre')
            ->orderBy('createdAt')
            ->simplePaginate(10);

        //dd($games);

        return view(
            'games.eloquent.list',
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
        // $game = DB::table('games')
        //     ->select('id', 'title', 'description', 'publication_date', 'rate')
        //     ->where('id', $id)
        //     ->first();

        $game = Game::game($id)->first();

        return view('games.eloquent.show', ['game' => $game]);

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
