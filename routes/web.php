<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return 'hello';
});

$app->group(['prefix' => 'api'], function () use ($app) {

    $app->get('/search', 'LyricsController@search');

    $app->get('/lyrics', 'LyricsController@lyrics');

    $app->get('/albums', 'LyricsController@albums');

    $app->get('/artists', 'LyricsController@artists');
});
