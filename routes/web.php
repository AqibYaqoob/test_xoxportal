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

/*===========================================
=            Section for Website            =
===========================================*/
// Route::get('/', 'WebControllers\PageController@redirect');
// Route::get('/site/{slug}', 'WebControllers\PageController@show');

/**
 *
 * 1) Contact Us Form (Enquiry Form Submition)
 *
 */
Route::post('site/enquiry/send', 'WebControllers\SupportController@sendEnquiry');

/**
 *
 * 2) Get Terms and Condition Categories
 *
 */
Route::get('tandc/details/{category_name?}', 'WebControllers\TermsAndConditionController@index');

/**
 *
 * Get FAQ's Details from selected Category
 *
 */
Route::get('faq/details/{category_name?}', 'WebControllers\FaqController@index');

/**
 *
 * Get BOD Details from Selected Candidate
 *
 */
Route::get('board-of-director/detail/{category_name?}', 'WebControllers\BoardOfDirectorController@index');


/*=====  End of Section for Website  ======*/

/*================================================
=            Section for Admin Portal            =
================================================*/
Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();

	/**
	 *
	 * Order Page Blocks
	 *Override Voyager Page Blocks
	 *
	 */
	  Route::group(['prefix' => 'page-blocks', 'as' => 'voyager.page-blocks.'], function(){
		Route::post('sort', ['uses' => "Voyager\VoyagerPageBlockController@sort", 'as' => 'sort']);
	});
});
/*=====  End of Section for Admin Portal  ======*/

/*====================================================
=            Section for Self Care Routes            =
====================================================*/
Route::group(['prefix' => 'selfcare'], function () {
	/**
	 *
	 * Login
	 * 1) Get code from Url provided from the XOX team provided url for redirection in query parameter.
	 *
	 */
	Route::get('/login', 'SelfCareControllers\UserController@login');
	Route::get('/get_token', 'SelfCareControllers\UserController@getToken');

	/**
	 *
	 * Register
	 *
	 */
	Route::get('/register', 'SelfCareControllers\UserController@registerPage');

	/**
	 *
	 * Reset Password
	 *
	 */
	Route::get('/reset/password', 'SelfCareControllers\UserController@resetPassword');

	/**
	 *
	 * About Self Care
	 *
	 */
	Route::get('/about', 'SelfCareControllers\AboutController@index');

	/**
	 *
	 * FAQ
	 *
	 */
	Route::get('/faq', 'SelfCareControllers\FaqController@index');

	/**
	 *
	 * Terms and Condition
	 *
	 */
	Route::get('/terms/condition', 'SelfCareControllers\TermsConditionController@index');

	/**
	 *
	 * Contact Us
	 *
	 */
	Route::get('/contact/us', 'SelfCareControllers\ContactUsController@index');

	/**
	 *
	 * Change Plan Route
	 *
	 */
	Route::get('/change/plan', 'SelfCareControllers\PlanController@index');

	/*========================================================
		=            Section for Authenticated Routes            =
	*/

	Route::group(['middleware' => ['jwtauth']], function () {
		/**
		 *
		 * Home Page Routes
		 *
		 */
		Route::get('/home', 'SelfCareControllers\HomeController@index');

		/**
		 *
		 * Profile Page Routes
		 *
		 */
		Route::get('/profile', 'SelfCareControllers\ProfileController@index');

		/**
		 *
		 * Change Password Page Routes
		 *
		 */
		// 1) Page Route
		Route::get('/change/password', 'SelfCareControllers\UserController@changePasswordPage');
		// 2) Change Password Route
		Route::post('/change/password/record', 'SelfCareControllers\UserController@changePassword');

		/**
		 *
		 * Bill Details Page Routes
		 *
		 */
		// 1) Bill History Info Page
		Route::post('/bill/history', 'SelfCareControllers\BillController@billHistory');
		// 2) Bill Statement Download
		Route::post('/bill/download', 'SelfCareControllers\BillController@billDownload');

		/**
	   	 *
	     * Subscriber Details
	     *
	     */
		// 1) Subscriber Numbers Detail
		Route::post('/subscribers/all/numbers', 'SelfCareControllers\BillController@numbersDetail');
		// 2) Subscribers Purchase Details
		Route::post('/subscribers/purchase/details', 'SelfCareControllers\BillController@purchaseDetail');

		/**
		 *
		 * Get Plan Info
		 *Change Current Plan
		 *Upgrade -- Downgrade Plan
		 */
		// 1) Plane info (index)
		Route::get('/plan/index', 'SelfCareControllers\PlanController@index')->name('selfcare.plan.index');
		Route::post('/plan/changePlan', 'SelfCareControllers\PlanController@changePlan')->name('selfcare.plan.changePlan');
	});

	/*=====  End of Section for Authenticated Routes  ======*/
});
/*=====  End of Section for Self Care Routes  ======*/

/*====================================================
=            Section for Voyager Page Block Routes   =
====================================================*/
Route::get('/{slug?}', 'VoyagerPageBlocks\PageController@getPage');
Route::post('/publish/page', 'VoyagerPageBlocks\PageController@publish');
Route::post('/preview/page', 'VoyagerPageBlocks\PageController@preview');

/*=====  End of Section for Voyager Page Block Routes  ======*/