<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SuporteController;



Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';



Route::get('/', [SiteController::class, 'index'])
    ->name('home');

Route::get ('/contato',[SiteController::class, 'contato'])
    ->name('contato');

route::get ('/suporte',[SuporteController::class, 'index'])
    ->name('suporte');

Route::post('/suporte/create',[SuporteController::class, 'suporte_create'])
    ->name('suporte.create');


//Rotas autenticadas para o Suporte
Route::middleware(['auth'])->group(function()
{
    Route::get('/suporte/edit', [SuporteController::class, 'edit'])
    ->name('suporte.edit');

}); 

Route::get('/suporte/listar', [SuporteController::class, 'listar'])
    ->name('suporte.listar');



