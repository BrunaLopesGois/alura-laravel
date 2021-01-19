<?php

use App\Http\Middleware\Autenticador;
use App\Mail\NovaSerie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

Route::get('/series', 'SeriesController@index')
    ->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')
    ->name('form_criar_serie')
    ->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store')
    ->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy')
    ->middleware('autenticador');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index')
    ->name('exibir_temporadas');
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome')
    ->middleware('autenticador');
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');
Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir')
    ->middleware('autenticador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');
Route::get('/sair', function () {
    Auth::logout();
    return redirect('/entrar');
});

Route::get('/visualizar-email', function () {
    return new NovaSerie('Arrow', 6, 12);
});
Route::get('/enviar-email', function () {
    $email = new NovaSerie('Arrow', '6', '12');
    $user = (object)[
        'email' => 'bruna-chan@live.com',
        'name' => 'Bruna'
    ];
    $email->subject('Nova série adicionada');
    Mail::to($user)->send($email);
    return 'Email enviado';
});
