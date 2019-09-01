<?php

	Route::group(['namespace' => 'hplink\Contact\Http\Controllers'],function(){
			
		Route::get('/contact','ContactController@index');

		Route::post('/contact/submit','ContactController@send')->name('contact');

	});
?>