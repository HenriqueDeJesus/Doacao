<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\FuncionarioController;
/*
Route::get('/', function(){
    return view('welcome');
});*/

Route::get('/', [DoacaoController::class, 'index']);
Route::get('/doacao/create', [DoacaoController::class, 'create']);
Route::post('/', [DoacaoController::class, 'store']);

Route::get('/sistema', [DoacaoController::class, 'sistema']);
Route::get('/cadastro', [DoacaoController::class, 'cadastro']);
Route::get('/acesso', [DoacaoController::class, 'acesso']);


Route::get('/loginfuncionario', [FuncionarioController::class, 'loginfuncionario']);
Route::post('/logar', [FuncionarioController::class, 'logar']);
Route::get('/loginfuncionario/dashboard', [FuncionarioController::class, 'dashboard']);
/*Route::get('/loginfuncionario', [FuncionarioController::class, 'loginfuncionario'])->name('funcionario.login');
Route::post('/loginfuncionario', [FuncionarioController::class, 'logar']);
Route::get('/loginfuncionario/dashboard', [FuncionarioController::class, 'dashboard']);
*/
/*Route::get('/loginfuncionario', [FuncionarioController::class, 'loginfuncionario']);
Route::post('/loginfuncionario', 'FuncionarioController@valida_login_fun');*/
/*
Route::get('/', [DoacaoController::class, 'index']);
Route::get('/doacao/create', [DoacaoController::class, 'create']);
Route::post('/doacao', [DoacaoController::class, 'store']);*/



Route::get('/contact', function () {
    return view('contact');
});

/*Route::get('/produtos', function () { /* Como o usuário acessa */
 /*   return view('products'); /* O que retorna para o usuário */
/*});*/

Route::get('/produtos', function () { 

    $busca = request('search');

    return view('products', ['busca' => $busca]); 
});


Route::get('/produtos_teste', [UsuarioController::class, 'index']);
Route::get('/produtos_teste/create', [UsuarioController::class, 'create']);

/*Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
