<?php

namespace App\Http\Controllers\API;

use App\Models\Game;
use App\Http\Controllers\Controller;
use App\Http\Requests\Game\StoreGameRequest;
use App\Http\Requests\Game\UpdateGameRequest;

class GameController extends Controller
{
    public function index() {
        $games = Game::with(['competition','rival','stadium'])->get();
        return response()->json($games);
    }

    public function store(StoreGameRequest $request) {
        $game = Game::create($request->validated());
        return response()->json(['msg' => 'Game created successfully', 'Game' => $game], 201);
    }

    public function show($id) {
        $game = Game::with(['competition','rival','stadium'])->find($id);
        return $game ? response()->json(['Game' => $game]) : response()->json(['msg' => 'Game not found'], 404);
    }

    public function update(UpdateGameRequest $request, Game $game) {
        Game::find($game->id)->update($request->validated());
        return response()->json(['msg' => 'Game updated successfully', 'Game' => $game], 201);
    }

    public function destroy(Game $game) {
        $game->delete();
        return response()->json(['msg' => 'Game deleted successfully'], 204);
    }
}
