<?php

namespace App\Models;

use Bus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    //protected $table = 'nazwa_tabeli'; // domyslnie liczba mnoga od nazwy klasy malymi literami

    //protected $primaryKey = 'email'; //domylsnie jeżeli nie podano to kolumna 'id' w bazie danych

    //protected $timestamps = false; //domyslnie true. Wtedy spodziewane sa kolumny created_at i updated_at

    /*
    protected $attributes = [
        'score' => 5
    ]; // Ustawienie domyslnej wartosci dla kolumny w bazie danych
    */


    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genres_id', 'id');
    }

    public function scopeBest(Builder $query): Builder
    {
        return $query->where('rate', '>', 9);
    }

    public function scopeGame(Builder $query, int $gameId): Builder
    {
        return $query->where('id', $gameId);
    }

}
