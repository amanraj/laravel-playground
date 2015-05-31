<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/landing', 'LandingController@index');


/*Route::post('/login','RegisterController@register_user');
Route::post('/register','RegisterController@register_user'); */


Route::get('/dashboard', 'DashboardController@viewDashboard');
Route::get('/', 'DashboardController@viewDashboard');


Route::get('/notes/{note_id}/view', 'NotesController@viewNotes');
Route::patch('/notes/{note_id}/edit', 'NotesController@edit');
Route::delete('/notes/{note_id}/delete', 'NotesController@delete');
Route::get('/colleges/{college_id}/add-notes', 'NotesController@addCollegeNotes');
Route::get('/courses/{course_id}/add-notes', 'NotesController@addCourseNotes');


Route::get('/colleges','CollegeController@viewColleges');
Route::post('/colleges/add','CollegeController@add');
Route::get('/colleges/{college_id}','CollegeController@college');
Route::get('/colleges/{college_id}/overview','CollegeController@overview');
Route::get('/colleges/{college_id}/college-reviews','CollegeController@collegeReviews');
Route::get('/colleges/{college_id}/course-reviews','CollegeController@courseReviews');


Route::get('/courses','CourseController@viewCourses');
Route::get('/courses/{course_id}','CourseController@course');
Route::get('/courses/{course_id}/general','CourseController@general');
Route::get('/courses/{course_id}/course-reviews','CourseController@reviews');


Route::get('/forum','ForumController@viewForum');
Route::post('/forum/post','ForumController@post');
Route::get('/forum/threads/{thread_id}','ForumController@viewThread');
Route::post('/forum/threads/reply/{thread_id}/','ForumController@reply');
Route::patch('/forum/threads/{thread_id}/{post_id}/edit','ForumController@editPost');
Route::delete('/forum/threads/{thread_id}/{post_id}/delete','ForumController@deletePost');
Route::get('/forum/threads/upvote/{post_id}/','ForumController@upVote');
Route::post('/forum/threads/{thread_id}/{post_id}/downvote','ForumController@downVote');


Route::get('/ambassador','AmbassadorController@viewAmbassadors');
Route::get('/ambassador/{ambassador_id}','AmbassadorController@ambassador');

Route::get('/ambs/home','AmbassadorController@ambs_home');
Route::get('/ambs/settings','AmbassadorController@settings');
Route::post('ambs/settings/save','AmbassadorController@saveSettings');
Route::get('/ambs/profile','AmbassadorController@profile');
Route::post('/ambs/profile/edit','AmbassadorController@editProfile');
Route::get('/ambs/notifications','AmbassadorController@notifications');

Route::post('/login','UserController@login');
Route::post('/register','UserController@register');
Route::get('/register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);
Route::get('/notifications','UserController@notification');
Route::get('/profile','UserController@profile');
Route::post('profile/edit','UserController@editProfile');
Route::get('/settings','UserController@settings');
Route::patch('/settings/edit','UserController@editSettings');
Route::get('signout','UserController@signout');


Route::get('/search_results','SearchController@search');


Route::get('/team','footerController@team');
Route::get('/be_a_ambassador','footerController@be_ambassador');
Route::get('/review','footerController@review');
Route::get('/privacy_policy','footerController@privacy_policy');
Route::get('/term_condition','footerController@term_condition');
Route::post('/submit_review','footerController@submit_review');

Route::get('/github','UserController@github');
Route::get('/user/github','UserController@github_redirect');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);