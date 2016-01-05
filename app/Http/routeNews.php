<?php

use Illuminate\Routing\Router;


Route::group(['prefix' => 'noticias'], function($router)
{
	$locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('/index', ['as' => $locale . '.blog', 'uses' => 'Modules\Blog\Http\Controllers\PublicController@index']);
    $router->get('/{slug}', ['as' => $locale . '.blog.slug', 'uses' => 'Modules\Blog\Http\Controllers\PublicController@show']);
});

/*Route::group(['prefix' => 'page', 'namespace' => 'Modules\Page\Http\Controllers'], function($router)
{
	$locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('/index', ['uses' => 'PublicController@index']);
    $router->post('/index', ['uses' => 'PublicController@create']);
});*/