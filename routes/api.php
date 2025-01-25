<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\SeasonController;
use App\Http\Controllers\API\CompetitionCategoryController;
use App\Http\Controllers\API\CompetitionController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\API\StadiumController;
use App\Http\Controllers\API\GameController;
use App\Http\Controllers\API\PlayerController;
use App\Http\Controllers\API\PlayerXGameController;
use App\Http\Controllers\API\UserXGameController;


//*=================================  AUTH ROUTES =================================*//
//Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

//*=================================  SEASON ROUTES =================================*//

Route::middleware('auth:sanctum')->prefix('seasons')->group(function () {
    Route::get('/', [SeasonController::class, 'index']);    
    Route::get('{id}', [SeasonController::class, 'show']); 
    Route::post('/', [SeasonController::class, 'store']);  
    Route::put('{season}', [SeasonController::class, 'update']); 
    Route::delete('{season}', [SeasonController::class, 'destroy']); 
});

//*=================================  COMPETITION CATEGORY ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('competitionCategories')->group(function () {
    Route::get('/', [CompetitionCategoryController::class, 'index']);    
    Route::get('{id}', [CompetitionCategoryController::class, 'show']); 
    Route::post('/', [CompetitionCategoryController::class, 'store']);  
    Route::put('{competitionCategory}', [CompetitionCategoryController::class, 'update']); 
    Route::delete('{competitionCategory}', [CompetitionCategoryController::class, 'destroy']); 
});

//*=================================  COMPETITION ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('competitions')->group(function () {
    Route::get('/', [CompetitionController::class, 'index']);    
    Route::get('{id}', [CompetitionController::class, 'show']); 
    Route::post('/', [CompetitionController::class, 'store']);  
    Route::put('{competition}', [CompetitionController::class, 'update']); 
    Route::delete('{competition}', [CompetitionController::class, 'destroy']); 
});

//*=================================  TEAM ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('teams')->group(function () {
    Route::get('/', [TeamController::class, 'index']);    
    Route::get('{id}', [TeamController::class, 'show']); 
    Route::post('/', [TeamController::class, 'store']);  
    Route::put('{team}', [TeamController::class, 'update']); 
    Route::delete('{team}', [TeamController::class, 'destroy']); 
});

//*=================================  STADIUM ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('stadia')->group(function () {
    Route::get('/', [StadiumController::class, 'index']);    
    Route::get('{id}', [StadiumController::class, 'show']); 
    Route::post('/', [StadiumController::class, 'store']);  
    Route::put('{stadium}', [StadiumController::class, 'update']); 
    Route::delete('{stadium}', [StadiumController::class, 'destroy']); 
});

//*=================================  GAME ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('games')->group(function () {
    Route::get('/', [GameController::class, 'index']);    
    Route::get('{id}', [GameController::class, 'show']); 
    Route::post('/', [GameController::class, 'store']);  
    Route::put('{game}', [GameController::class, 'update']); 
    Route::delete('{game}', [GameController::class, 'destroy']); 
});

//*=================================  PLAYER ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('players')->group(function () {
    Route::get('/', [PlayerController::class, 'index']);    
    Route::get('{id}', [PlayerController::class, 'show']); 
    Route::post('/', [PlayerController::class, 'store']);  
    Route::put('{player}', [PlayerController::class, 'update']); 
    Route::delete('{player}', [PlayerController::class, 'destroy']); 
});

//*=================================  PLAYERXGAME ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('playersgames')->group(function () {
    Route::get('/', [PlayerXGameController::class, 'index']);    
    Route::get('{id}', [PlayerXGameController::class, 'show']); 
    Route::post('/', [PlayerXGameController::class, 'store']);  
    Route::put('{playergame}', [PlayerXGameController::class, 'update']); 
    Route::delete('{playergame}', [PlayerXGameController::class, 'destroy']); 
});

//*=================================  USERXGAME ROUTES =================================*//
Route::middleware('auth:sanctum')->prefix('usersgames')->group(function () {
    Route::get('/', [UserXGameController::class, 'index']);    
    Route::get('{id}', [UserXGameController::class, 'show']); 
    Route::post('/', [UserXGameController::class, 'store']);  
    Route::put('{usergame}', [UserXGameController::class, 'update']); 
    Route::delete('{usergame}', [UserXGameController::class, 'destroy']); 
});
