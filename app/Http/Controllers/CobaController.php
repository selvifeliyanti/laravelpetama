<?php	<?php
use App\Http\Controllers\Api\CobaController;	use App\Http\Controllers\Api\CobaController;
use App\Http\Controllers\Api\GroupsController;	use App\Http\Controllers\Api\GroupsController;
use Illuminate\Http\Request;	use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;	use Illuminate\Support\Facades\Route;
/*	/*
|--------------------------------------------------------------------------	|--------------------------------------------------------------------------
| API Routes	| API Routes
|--------------------------------------------------------------------------	|--------------------------------------------------------------------------
|	|
| Here is where you can register API routes for your application. These	| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which	| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!	| is assigned the "api" middleware group. Enjoy building your API!
|	|
*/	*/
route::get('', [CobaController::class, 'index']);	route::get('', [CobaController::class, 'index']);
route::resources([	route::resources([
    'friends' =>CobaController::class,	    'friends' =>CobaController::class,
    'groups' =>groupscontroller::class,	    'groups' =>GroupsController::class,
]); 	]); 