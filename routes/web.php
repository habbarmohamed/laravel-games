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



// Route::get('/','NewsController@showdropdown');

Route::get('/','TournoisController@showhome');
// Route::get('/jeux','JeuxController@showgame');
Route::get('/support','JeuxController@helpgame');
Route::get('/pubg','JeuxController@showinfos');
Route::get('/reviews','JeuxController@showblog');
// Route::get('/index/reviews','JeuxController@showdatareviews');
// Route::get('/news','NewsController@newsblog')->name('news');
Route::get('/news','NewsController@pagenews');
Route::get('/contact','NewsController@footerTop');

// Route::get('/','JeuxController@shownav');



Route::get('/jeux/id={id}','JeuxController@showgames')->name('games');
Route::get('/reviews/id={id}','JeuxController@showdatareviews')->name('reviews');
Route::get('/news/id={id}','NewsController@newsblog')->name('newest');
Route::get('/newss/id={id}','NewsController@pagenews')->name('news');
Route::get('/jeuxx/id={id}','JeuxController@pagegames')->name('page');

// Route::get('/jeux/id={id}','JeuxController@randomjeux');


// Route::get('/Admin/profile', 'AdminUserController@nameAdmin');

 	
  // All your routes you want to be secure

Route::group(['middleware' => ['auth', 'Admin']], function () 
{

	Route::get('/home', 'AdminUserController@index');
	
    Route::get('/profile', 'HomeController@profile');
    
	Route::resource('/Admin/users', 'AdminUserController');

	Route::resource('/Admin/jeux', 'JeuxController');

	Route::resource('/Admin/tournois', 'TournoisController');

	Route::resource('/Admin/slider', 'SliderController');

	Route::resource('/Admin/categories', 'CategoryController');

	Route::resource('/Admin/news', 'NewsController');

	// Route::get('/Admin/profile', function (){
	// 	return view('Admin.profile'); 
	// 	});
});

	



Route::get('/logout', function(){
   Auth::logout();
   Session::flush();
   return Redirect::to('login');
});



/* 				Front 			*/




Route::get('/index/pubg', function () {
	return view('front/pubg');
});






Route::get('/contact', 'ContactController@create');

Route::post('/contact', 'ContactController@store');


Route::get('/participate', 'ParticipateController@create');

Route::post('/participate', 'ParticipateController@store');


Auth::routes();

