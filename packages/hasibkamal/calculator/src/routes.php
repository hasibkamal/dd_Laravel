<?php
Route::get('add/{a}/{b}', 'HasibKamal\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'HasibKamal\Calculator\CalculatorController@subtract');
Route::get('test/', 'HasibKamal\Calculator\CalculatorController@test');