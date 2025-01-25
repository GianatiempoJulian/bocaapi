<?php

namespace App\Http\Controllers\API;

use App\Models\Player;
use App\Http\Controllers\Controller;
use App\Http\Requests\Player\StorePlayerRequest;
use App\Http\Requests\Player\UpdatePlayerRequest;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::all();
        return response()->json($players);
    }

    public function store(StorePlayerRequest $request) {
        $player = Player::create($request->validated());
        return response()->json(['msg' => 'Player created successfully', 'Player' => $player], 201);
    }

    public function show($id) {
        $player = Player::find($id);
        return $player ? response()->json(['Player' => $player]) : response()->json(['msg' => 'Player not found'], 404);
    }

    public function update(UpdatePlayerRequest $request, Player $player) {
        Player::find($player->id)->update($request->validated());
        return response()->json(['msg' => 'Player updated successfully', 'Player' => $player], 201);
    }

    public function destroy(Player $player) {
        $player->delete();
        return response()->json(['msg' => 'Player deleted successfully'], 204);
    }
}
