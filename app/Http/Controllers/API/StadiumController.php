<?php

namespace App\Http\Controllers\API;

use App\Models\Stadium;
use App\Http\Controllers\Controller;
use App\Http\Requests\Stadium\StoreStadiumRequest;


class StadiumController extends Controller
{
    public function index() {
        $stadiums = Stadium::all();
        return response()->json($stadiums);
    }

    public function store(StoreStadiumRequest $request) {
        $stadium = Stadium::create($request->validated());
        return response()->json(['msg' => 'Stadium created successfully', 'Stadium' => $stadium], 201);
    }

    public function show($id) {
        $stadium = Stadium::find($id);
        return $stadium ? response()->json(['Stadium' => $stadium]) : response()->json(['msg' => 'Stadium not found'], 404);
    }

    public function update(StoreStadiumRequest $request, Stadium $stadium) {
        Stadium::find($stadium->id)->update($request->validated());
        return response()->json(['msg' => 'Stadium updated successfully', 'Stadium' => $stadium], 201);
    }

    public function destroy(Stadium $stadium) {
        $stadium->delete();
        return response()->json(['msg' => 'Stadium deleted successfully'], 204);
    }
}
