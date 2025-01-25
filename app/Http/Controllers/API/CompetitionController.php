<?php

namespace App\Http\Controllers\API\API;

use App\Models\Competition;
use App\Http\Controllers\Controller;
use App\Http\Requests\Competition\StoreCompetitionRequest;
use App\Http\Requests\Competition\UpdateCompetitionRequest;


class CompetitionController extends Controller
{
    public function index() {
        $competitions = Competition::with(['competitionCategory'])->get();
        return response()->json($competitions);
    }

    public function store(StoreCompetitionRequest $request) {
        $competition = Competition::create($request->validated());
        return response()->json(['msg' => 'Competition created successfully', 'Competition' => $competition], 201);
    }

    public function show($id) {
        $competition = Competition::with(['competitionCategory'])->find($id);
        return $competition ? response()->json(['Competition' => $competition]) : response()->json(['msg' => 'Competition not found'], 404);
    }

    public function update(UpdateCompetitionRequest $request, Competition $competition) {
        Competition::find($competition->id)->update($request->validated());
        return response()->json(['msg' => 'Competition updated successfully', 'Competition' => $competition], 201);
    }

    public function destroy(Competition $competition) {
        $competition->delete();
        return response()->json(['msg' => 'Competition deleted successfully'], 204);
    }
}
