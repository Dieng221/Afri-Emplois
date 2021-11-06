<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeconnexionController;
use Illuminate\Support\Facades\Route;


// ROUTE INDEX
Route::get('/', [Controller::class,'index']);
Route::get('/a_propos', [Controller::class,'a_propos']);

//ROUTE CONNEXION
Route::get('/connexion.create', [ConnexionController::class, 'create']);
Route::post('/connexion.store', [ConnexionController::class, 'store']);

//ROUTE DECONNEXION
Route::get('/deconnexion.destroy', [DeconnexionController::class, 'destroy']);

//ROUTE INSCRIPTION
Route::get('/inscription.create', [InscriptionController::class, 'create']);
Route::post('/inscription.store', [InscriptionController::class, 'store']);

// ROUTE JOB
Route::get('/job', [RecruteurController::class, 'index']);
Route::get('/job.create', [RecruteurController::class, 'create']);
Route::post('/job.store', [RecruteurController::class, 'store']);
Route::get('/job.{id}.show', [RecruteurController::class, 'show']);
Route::get('/job.{id}.edit', [RecruteurController::class, 'edit']);
Route::post('/job.{id}.update', [RecruteurController::class, 'update']);
Route::get('/job.{id}.destroy', [RecruteurController::class, 'destroy']);

// ROUTE CANDIDAT
Route::get('/candidat', [CandidatController::class, 'index']);
Route::get('/candidat.create', [CandidatController::class, 'create']);
Route::post('/candidat.store', [CandidatController::class, 'store']);
Route::get('/Candidat.{id}.show', [CandidatController::class, 'show']);
Route::get('/candidat/edit', [CandidatController::class, 'edit']);
Route::post('/candidat.update', [CandidatController::class, 'update']);
Route::get('/candidat.{id}.destroy', [CandidatController::class, 'destroy']);

// ROUTE ADMINISTRATEUR
Route::get('/administrateur', [AdministrateurController::class, 'index']);
Route::get('/administrateur.create', [AdministrateurController::class, 'create']);
Route::post('/administrateur.store', [AdministrateurController::class, 'store']);
Route::get('/administrateur.{id}/show', [AdministrateurController::class, 'show']);
Route::get('/administrateur.{id}.edit', [AdministrateurController::class, 'edit']);
Route::post('/administrateur.{id}.update', [AdministrateurController::class, 'update']);
Route::get('/administrateur.{id}.destroy', [AdministrateurController::class, 'destroy']);

// ROUTE CONTACT
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact.create', [ContactController::class, 'create']);
Route::post('/contact.store', [ContactController::class, 'store']);
Route::get('/contact.{id}/show', [ContactController::class, 'show']);
Route::get('/contact.{id}.edit', [ContactController::class, 'edit']);
Route::post('/contact.{id}.update', [ContactController::class, 'update']);
Route::get('/contact.{id}.destroy', [ContactController::class, 'destroy']);

