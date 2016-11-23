<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/Clients/Create', function()
{
	return View::make('pages.add-client');
});
Route::post('/Clients/Create', 'ClientController@CreateClient');	

Route::get('/Clients', 'ClientController@Index');
Route::get('/Clients/Update/{id}', 'ClientController@GetInformation');
Route::post('/Clients/Update/{id}', 'ClientController@UpdateInfoById');
Route::get('/Cluster', 'ClusterController@Index');
Route::post('/Cluster', 'ClusterController@Index');
Route::get('/Cluster/Create', 'ClusterController@PreCreateCluster');
Route::get('/Cluster/Update/{id}', 'ClusterController@PreUpdateCluster');
Route::post('/Cluster/Update/{id}', 'ClusterController@PostUpdateCluster');
Route::post('/Cluster/Create', 'ClusterController@PostCreateCluster');
Route::get('/Cluster/Members/Add/{id}','ClusterController@PreAddMembersToCluster');

Route::get('/Clients/Summary','ClientController@Summary');
Route::get('/Clients/Summary/{id}','ClientController@Summary');
