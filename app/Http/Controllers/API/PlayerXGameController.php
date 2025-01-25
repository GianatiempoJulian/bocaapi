<?php

namespace App\Http\Controllers\API;

use App\Models\PlayerXGame;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlayerXGame\StorePlayerXGameRequest;
use App\Http\Requests\PlayerXGame\UpdatePlayerXGameRequest;

class PlayerXGameController extends Controller
{
    public function index() {
        $playersXgames = PlayerXGame::with(['player','game'])->get();
        return response()->json($playersXgames);
    }

    public function store(StorePlayerXGameRequest $request) {
        $playerXGame = PlayerXGame::create($request->validated());
        return response()->json(['msg' => 'PlayerXGame created successfully', 'PlayerXGame' => $playerXGame], 201);
    }

    public function show($id) {
        $playerXGame = PlayerXGame::with(['player','game'])->find($id);
        return $playerXGame ? response()->json(['PlayerXGame' => $playerXGame]) : response()->json(['msg' => 'PlayerXGame not found'], 404);
    }

    public function update(UpdatePlayerXGameRequest $request, $id){
        $playerXGame = PlayerXGame::find($id);
    
        if (!$playerXGame) {
            return response()->json(['msg' => 'PlayerXGame not found'], 404);
        }
    
        $playerXGame->update($request->validated());
    
        return response()->json(['msg' => 'PlayerXGame updated successfully', 'PlayerXGame' => $playerXGame], 201);
    }

    public function destroy($id) {
        $playerXGame = PlayerXGame::find($id);
        if (!$playerXGame) {
            return response()->json(['msg' => 'PlayerXGame not found'], 404);
        }
        $playerXGame->delete();
        return response()->json(['msg' => 'PlayerXGame deleted successfully'], 204);
    }
}
