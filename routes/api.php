<?php

use App\Http\Controllers\PosteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ActivityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Controller
|--------------------------------------------------------------------------
|
*/
Route::post('insert_user', [AuthController::class, 'insertUser']);
Route::post('login', [AuthController::class, 'LoginUser']);



/*
|--------------------------------------------------------------------------
| Member Controller
|--------------------------------------------------------------------------
|
*/
Route::post('add_Membre/{clubId}', [MembersController::class, 'addUserToClub']);
Route::delete('deleteMember/{clubId}/{userId}', [MembersController::class, 'deleteMember']);
Route::get('showMembers/{clubId}', [MembersController::class, 'showMembers']);
Route::get('members_number/{clubId}', [MembersController::class, 'countMembers']);



/*
|--------------------------------------------------------------------------
| Admin Controller
|--------------------------------------------------------------------------
|
*/
Route::get('users_number', [AdminController::class, 'countUsers']);
Route::get('clubs_number', [AdminController::class, 'countClubs']);
Route::get('show_club/{clubId}', [AdminController::class, 'ShowClub']);
Route::get('show_all_clubs', [AdminController::class, 'ShowAllClubs']);
Route::post('create_club', [AdminController::class, 'createClub']);
Route::put('update_club/{clubId}', [AdminController::class, 'updateClub']);
Route::delete('delete_club/{clubId}', [AdminController::class, 'deleteClub']);


/*
|--------------------------------------------------------------------------
| Poste Controller
|--------------------------------------------------------------------------
|
*/
Route::post('create_poste/{clubId}', [PosteController::class, 'CreatePoste']);
Route::get('affiche_poste/{clubId}', [PosteController::class, 'affichePoste']);


/*
|--------------------------------------------------------------------------
| Etudiant Controller
|--------------------------------------------------------------------------
|
*/
Route::get('show_etudiant/{id}', [EtudiantController::class, 'showEtudiant']);
Route::put('update_etudiant/{id}', [EtudiantController::class, 'updateEtudiant']);



/*
|--------------------------------------------------------------------------
| Activity Controller
|--------------------------------------------------------------------------
|
*/
Route::post('add_activity/{clubId}', [ActivityController::class, 'addActivity']);
Route::delete('delete_activity/{clubId}/{activityId}', [ActivityController::class, 'deleteActivity']);
Route::get('show_activity/{clubId}', [ActivityController::class, 'showActivity']);
Route::put('update_activity/{clubId}/{activityId}', [ActivityController::class, 'updateActivity']);
Route::get('count_formation/{clubId}', [ActivityController::class, 'countFormation']);
Route::get('count_workshop/{clubId}', [ActivityController::class, 'countWorkshop']);