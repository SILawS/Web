<?php

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

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
	/*
	 *  CRUD
	 */
	    CRUD::resource(	'exam', 		'ExamCrudController');
	    CRUD::resource(	'post', 		'PostCrudController');
	    CRUD::resource(	'event', 		'EventCrudController');
	    CRUD::resource(	'client', 		'ClientCrudController');
	    CRUD::resource(	'program', 		'ProgramCrudController');
	    CRUD::resource(	'testimonial', 	'TestimonialCrudController');
});