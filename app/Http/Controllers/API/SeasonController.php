<?php

namespace App\Http\Controllers\API;

use App\Models\Season;
use App\Http\Controllers\Controller;
use App\Http\Requests\Season\StoreSeasonRequest;

class SeasonController extends Controller
{
    public function index() {
        $seasons = Season::with(['competitions'])->get();
        return response()->json($seasons);
    }

    public function store(StoreSeasonRequest $request) {
        $season = Season::create($request->validated());
        return response()->json(['msg' => 'Season created successfully', 'Season' => $season], 201);
    }

    public function show($id) {
        $season = Season::with(['competitions'])->find($id);
        return $season ? response()->json(['Season' => $season]) : response()->json(['msg' => 'Season not found'], 404);
    }

    public function update(StoreSeasonRequest $request, Season $season) {
        Season::find($season->id)->update($request->validated());
        return response()->json(['msg' => 'Season updated successfully', 'Season' => $season], 201);
    }

    public function destroy(Season $season) {
        $season->delete();
        return response()->json(['msg' => 'Season deleted successfully'], 204);
    }
}
