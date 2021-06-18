<?php

use App\Http\Controllers\AddRelationToGraphController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\UpdateGraphShapeController;
use Illuminate\Support\Facades\Route;



Route::get('/graphs', [GraphController::class, 'index']);
Route::get('/graphs/{graph}', [GraphController::class, 'show']);
Route::post('/graphs', [GraphController::class, 'store']);
Route::put('/graphs/{graph}', [GraphController::class, 'update']);
Route::delete('/graphs/{graph}', [GraphController::class, 'destroy']);

Route::post('/graphs/{graph}/nodes', [NodeController::class, 'store']);

Route::post('/graphs/{graph}/relations', AddRelationToGraphController::class);

Route::put('/relations/{relation}', UpdateGraphShapeController::class);

Route::delete('/nodes/{node}', [NodeController::class, 'destroy']);

