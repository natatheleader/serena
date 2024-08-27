<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\KnowledgebaseController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\BankController;
use App\Http\Controllers\Api\CurrentStatusController;
use App\Http\Controllers\Api\NextStatusController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\WithdrawalController;
use App\Http\Controllers\Api\RefferalController;
use App\Http\Controllers\Api\ComplainController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\NotificationController;

use App\Http\Controllers\Api\AuthController;

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

Route::get("/test-me", function () {
    return 'Hello from Laravel!';
});