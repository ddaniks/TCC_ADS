<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\RequisitoController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\importController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\LicitationController;



// Rota para a Tela Inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota para buscar licitações
Route::get('search', [HomeController::class, 'search'])->name('search');


// Rotas de Autenticação
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Rota para o Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rotas para Gerenciamento de Checklists
Route::resource('checklists', ChecklistController::class);

// Rotas para Gerenciamento de Requisitos
Route::resource('requisitos', RequisitoController::class);

// Rotas para Relatórios e Documentos
Route::post('reports/generate', [ReportController::class, 'generate'])->name('report.generate');
Route::get('reports', [ReportController::class, 'index'])->name('reports.index');

// Rota para Configurações
Route::get('settings', [SettingsController::class, 'index'])->name('settings');
Route::post('settings', [SettingsController::class, 'update'])->name('settings.update');

// Rota para Ajuda e Suporte
Route::get('support', [SupportController::class, 'index'])->name('support');
Route::post('support', [SupportController::class, 'submit'])->name('support.submit');

//rota api
Route::get('/licitações', [App\Http\Controllers\LicitationController::class, 'index'])->name('licitations.index');


// routes/web.php
Route::post('/import-csv', [LicitationController::class, 'importCSV'])->name('importCSV');
Route::post('/importar-csv', [ImportController::class, 'importCsv'])->name('home');
Route::post('/importar-csv', [ImportController::class, 'import']);
Route::post('/importar-csv', [HomeController::class, 'import']);


Route::post('/upload-files', [UploadController::class, 'store'])->name('uploadFiles');
Route::post('/import-csv', [CSVController::class, 'importCSV'])->name('importCSV');
Route::post('/importar-csv', [RequisitoController::class, 'importarCSV'])->name('importar-csv');




Route::get('/importar', function () {
    return view('importar');
});

Route::post('/importar', [RequisitoController::class, 'importarCSV'])->name('importarCSV');

