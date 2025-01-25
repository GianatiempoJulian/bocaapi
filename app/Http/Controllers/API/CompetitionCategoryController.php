<?php

namespace App\Http\Controllers\API;

use App\Models\CompetitionCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompetitionCategory\StoreCompetitionCategoryRequest;


class CompetitionCategoryController extends Controller
{
    public function index() {
        $competitionCategories = CompetitionCategory::with(['competitions'])->get();
        return response()->json($competitionCategories);
    }

    public function store(StoreCompetitionCategoryRequest $request) {
        $competitionCategory = CompetitionCategory::create($request->validated());
        return response()->json(['msg' => 'CompetitionCategory created successfully', 'CompetitionCategory' => $competitionCategory], 201);
    }

    public function show($id) {
        $competitionCategory = CompetitionCategory::with(['competitions'])->find($id);
        return $competitionCategory ? response()->json(['CompetitionCategory' => $competitionCategory]) : response()->json(['msg' => 'CompetitionCategory not found'], 404);
    }

    public function update(StoreCompetitionCategoryRequest $request, CompetitionCategory $competitionCategory) {
        CompetitionCategory::find($competitionCategory->id)->update($request->validated());
        return response()->json(['msg' => 'CompetitionCategory updated successfully', 'CompetitionCategory' => $competitionCategory], 201);
    }

    public function destroy(CompetitionCategory $competitionCategory) {
        $competitionCategory->delete();
        return response()->json(['msg' => 'CompetitionCategory deleted successfully'], 204);
    }
}
