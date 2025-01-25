<?php

namespace App\Http\Controllers\API;

use App\Models\Team;
use App\Http\Controllers\Controller;
use App\Http\Requests\Team\StoreTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::all();
        return response()->json($teams);
    }

    public function store(StoreTeamRequest $request) {
        $team = Team::create($request->validated());
        return response()->json(['msg' => 'Team created successfully', 'Team' => $team], 201);
    }

    public function show($id) {
        $team = Team::find($id);
        return $team ? response()->json(['Team' => $team]) : response()->json(['msg' => 'Team not found'], 404);
    }

    public function update(UpdateTeamRequest $request, Team $team) {
        Team::find($team->id)->update($request->validated());
        return response()->json(['msg' => 'Team updated successfully', 'Team' => $team], 201);
    }

    public function destroy(Team $team) {
        $team->delete();
        return response()->json(['msg' => 'Team deleted successfully'], 204);
    }
}
