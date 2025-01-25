<?php

namespace App\Http\Controllers\API;

use App\Models\UserXGame;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserXGame\StoreUserXGame;

class UserXGameController extends Controller
{
    public function index() {
        $usersXGames = UserXGame::with(['user','game'])->get();
        return response()->json($usersXGames);
    }

    public function store(StoreUserXGame $request) {
        $userXGame = UserXGame::create($request->validated());
        return response()->json(['msg' => 'UserXGame created successfully', 'UserXGame' => $userXGame], 201);
    }

    public function show($id) {
        $usersXGames = UserXGame::with(['user','game'])->find($id);
        return $userXGame ? response()->json(['UserXGame' => $userXGame]) : response()->json(['msg' => 'UserXGame not found'], 404);
    }

    public function update(StoreUserXGame $request, UserXGame $userXGame) {
        UserXGame::find($userXGame->id)->update($request->validated());
        return response()->json(['msg' => 'UserXGame updated successfully', 'UserXGame' => $userXGame], 201);
    }

    public function destroy(UserXGame $userXGame) {
        $userXGame->delete();
        return response()->json(['msg' => 'UserXGame deleted successfully'], 204);
    }
}
