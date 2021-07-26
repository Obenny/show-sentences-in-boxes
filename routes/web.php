<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// table routes with users having to login to access any page through the auth middleware
Route::get('/tables/list', 'Tables\ListTables@index')->name('tables.list')->middleware('auth');
Route::get('/table/create', 'Tables\CreateTable@create')->name('table.create')->middleware('auth');
Route::post('/table/store', 'Tables\StoreTable@store')->name('table.store')->middleware('auth');
Route::get('/table/{id}/show', 'Tables\ShowTable@show')->name('table.show')->middleware('auth');
Route::get('/table/{id}/edit', 'Tables\EditTable@edit')->name('table.edit')->middleware('auth');
Route::put('/table/{id}/update', 'Tables\UpdateTable@update')->name('table.update')->middleware('auth');
Route::delete('/table/{id}/delete', 'Tables\DeleteTable@destroy')->name('table.delete')->middleware('auth');

Route::get('/table/{id}/addsentences', 'Tables\AddSentencesInTableBoxes@addsentences')->name('table.asib')->middleware('auth');
Route::post('/table/store/sentences', 'Tables\StoreSentencesInTableBoxes@store')->name('table.sentences.store')->middleware('auth');
Route::get('/table/{id}/showsentences', 'Tables\ShowSentencesInTableBoxes@showsentences')->name('table.ssib')->middleware('auth');



// sentence routes with users having to login to access any page through the auth middleware
Route::get('/sentences/list', 'Sentences\ListSentences@index')->name('sentences.list')->middleware('auth');
Route::get('/sentence/create', 'Sentences\CreateSentence@create')->name('sentence.create')->middleware('auth');
Route::post('/sentence/store', 'Sentences\StoreSentence@store')->name('sentence.store')->middleware('auth');
Route::get('/sentence/{id}/show', 'Sentences\ShowSentence@show')->name('sentence.show')->middleware('auth');
Route::get('/sentence/{id}/{did}/edit', 'Sentences\EditSentence@edit')->name('sentence.edit')->middleware('auth');
Route::put('/sentence/{id}/update', 'Sentences\UpdateSentence@update')->name('sentence.update')->middleware('auth');
Route::delete('/sentence/{id}/delete', 'Sentences\DeleteSentence@destroy')->name('sentence.delete')->middleware('auth');
