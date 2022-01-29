<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentExamControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', function (Request $request) {
    $user = User::where("email", $request->email)->first();
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            "error" => "Invalid credentials"
        ], 400);
    }
    return $user->createToken($user->email)->plainTextToken;
});
Route::middleware('auth:sanctum')->group(function () {

    Route::get('students/{id}/exams', [StudentExamControler::class, 'getFromStudent']);
    Route::post('students/{id}/exams', [StudentExamControler::class, 'store']);
    Route::apiResource('students', StudentController::class);
});
