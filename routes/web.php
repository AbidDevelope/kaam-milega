<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\JobSeekerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|
*/
Route::fallback(function(){
return redirect('404');
});
Route::get('/clear-cache', function() {
$exitCode = Artisan::call('cache:clear');
return 'ok';

}); 

Route::get('/config-cache', function() {

Artisan::call('config:clear');
return 'ok';
});

Route::get('/', 'IndexController@index');
Route::view('connect-page','connect-page');
// Route::view('job-listing-details-page-after-login','job-listing-details-page-after-login');
// Route::view('job-listing-details-page-before-login','job-listing-details-page-before-login');
// Route::view('job-listing-page-after-login','job-listing-page-after-login');
// Route::view('job-listing-page-before-login','job-listing-page-before-login');
// Route::view('user-login','login');

// RecruiterController Route Start
Route::get('recruiter-login', [RecruiterController::class, 'recruiterLoginForm'])->name('recruiter-login');
Route::post('recruiter-send-otp', [RecruiterController::class, 'sendOtp'])->name('recruiter-send-otp');
Route::get('recruiter-resend-otp', [RecruiterController::class, 'resendOtp'])->name('recruiter-resend-otp');
Route::post('recruiter-verify-otp', [RecruiterController::class, 'verifyOtp'])->name('recruiter-verify-otp');
Route::get('recruiter-basic-profile',[RecruiterController::class, 'recruiterBasicProfile'])->name('recruiter-basic-profile');
Route::post('recruiter-basic-profile', [RecruiterController::class, 'recruiterBasicProfileSubmit'])->name('recruiter-basic-profile');
Route::get('recruiter-verify-official-email', [RecruiterController::class, 'recruiterVerifyOfficialEmail'])->name('recruiter-verify-official-email');
Route::post('recruiter-verify-official-email', [RecruiterController::class, 'recruiterEmailSubmit'])->name('recruiter-verify-official-email');
Route::get('recruiter-verify-official-email-otp', [RecruiterController::class, 'recruiterEmailOtp'])->name('recruiter-verify-official-email-otp');
Route::post('recruiter-verify-official-email-otp', [RecruiterController::class, 'EmailVerifyOtp'])->name('recruiter-verify-official-email-otp');
Route::get('recruiter-upload-company-document-verify', [RecruiterController::class, 'recruiterUploadDocuments'])->name('recruiter-upload-company-document-verify');
Route::get('recruiter-upload-certificate-page', [RecruiterController::class, 'UploadDocuments'])->name('recruiter-upload-certificate-page');
Route::post('recruiter-upload-certificate', [RecruiterController::class, 'UploadDocumentSubmit'])->name('recruiter-upload-certificate');
Route::get('thank-you', [RecruiterController::class, 'thankYou'])->name('thank-you');
// RecruiterController Route End 

Route::view('make-your-profile','make-your-profile');
// Route::view('recruiter-login','recruiter-login');

Auth::routes([
'register' => false, // Registration Routes...
'verify' => false, // Email Verification Routes...
]);
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('login/{provider}', 'SocialController@redirect');
// Route::get('login/{provider}/callback','SocialController@Callback');

Route::get('login-x', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login-x', 'Auth\LoginController@login');
Route::post('logout-x', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', function () {
  Auth::logout(); 
  return redirect('/');
});
// Password Reset Routes...
Route::get('/password/reset-x', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::post('/follow/{follow_id}', 'IndexController@follow')->name('follow');
Route::post('/unfollow/{follow_id}', 'IndexController@unfollow')->name('unfollow');
 

Route::get('services','ServiceController@services');
Route::resources([
'admins' => 'AdminController',
'admin/banners' => 'BannerController',
'admin/states' => 'StateController',
'admin/district' => 'DistrictController',
'admin/education-level' => 'EducationLevelController',
'admin/job-category' => 'JobCategoryController',
'admin/job-title' => 'JobTitleController',
'admin/skills' => 'SkillController',
'admin/job-seeker' => 'JobSeekerController',
'admin/recruiters' => 'RecruiterController',
'admin/faqs' => 'FaqController',
'admin/learning-videos' => 'LearningVideoController',
'admin/reviews' => 'ReviewController',
'admin/recruiter-reviews' => 'RecruiterReviewController',
'admin/events' => 'EventController',
 

]);
Route::get('/admin/otp', 'AdminController@otpData');
Route::get('/generate-pdf/{id}', 'PdfController@generatePdf')->name('generate.pdf');
Route::get('/admins/generate-admin-pdf/{id}', 'PdfController@generatePdfAdmin')->name('generate.pdf');
Route::post('admins/change-status/{id}','AdminController@changeStatus');

Route::get('dashboard','IndexController@dashboard')->middleware('auth');
Route::post('dashboard','IndexController@updateBasicInfo')->middleware('auth')->name('update.info');

Route::view('thankyou','thankyou');
Route::view('404','errors.404');

// User Authetication Form


Route::get('login','JobSeekerController@showLoginForm');
Route::get('/send-otp','JobSeekerController@reSendOtp');
Route::post('/verify-otp', 'JobSeekerController@verifyOtp')->name('verify-otp');
Route::post('/job-seeker-store', 'JobSeekerController@jobSeekerStore')->name('job-seeker-store');
// Route::view('home-page-after-login','home-page-after-login');
Route::get('/home-page-after-login','JobSeekerController@homePageAfterLogin');
Route::get('user-profile', 'JobSeekerController@userProfile');
Route::post('user-profile', 'JobSeekerController@backgroundImageUpload')->name('user-profile');
Route::post('profile-upload', 'JobSeekerController@profileUpload');
Route::post('intro/edit', 'JobSeekerController@editIntro')->name('intro/edit');
Route::post('about/edit', 'JobSeekerController@editAbout')->name('about/edit');
Route::post('experience/add', 'JobSeekerController@addExperience')->name('experience/add');
Route::post('experience/update/{id}', 'JobSeekerController@experienceUpdate')->name('experience/update');
Route::get('experience/delete/{id}', 'JobSeekerController@deleteExperience')->name('experience/delete');
Route::post('education/add', 'JobSeekerController@addEducation')->name('education/add');
Route::post('education/edit', 'JobSeekerController@editEducation')->name('education/edit');
Route::post('education/update/{id}', 'JobSeekerController@updateEducation')->name('education/update');
Route::get('education/delete/{id}', 'JobSeekerController@deleteEducation')->name('education/delete');
Route::post('contact/edit', 'JobSeekerController@editContact')->name('contact/edit');

Route::get('/job-listing','IndexController@jobListingDetails');
Route::get('/hire','IndexController@recHome');

// Route::view('rec-home','rec-home');

// Route::view('make-your-profile','make-your-profile');
Route::get('/make-your-profile','JobSeekerController@makeProfile');
Route::get('/cities/{id}','JobSeekerController@cities');

// Route::controller(JobSeekerController::class)->group(function(){
//   Route::get('home-page-after-login', 'homePageAfterLogin')->name('home-page-after-login');
// });



// Route::get('login', function(){
// if(!auth()->user()){
// return view('login');
// }
// return redirect()->back();
// });
Route::get('password/reset', function(){
return view('auth.user-auth.user_reset');
})->name('user.forget');
// Route::post('/login-with-otp','Auth\OtpLoginController@sendOtp');
// Route::post('/verify-otp','Auth\OtpLoginController@verifyOtpNumber');
// Route::get('/resend-otp','Auth\OtpLoginController@reSendOtp');


Route::get('/authorize-gmail', 'TokenController@redirectToGoogleAuth')->name('gmail.authorize');
Route::get('/get-token', 'TokenController@handleGoogleCallback')->name('gmail.callback');
Route::post('/send-email', 'TokenController@sendEmail')->name('send.email');
Route::get('/check', 'TokenController@sendEmail')->name('gmail.email');
// Route::post('admins/change-active-status/{id},UserController@changeStatus');
Route::post('admins/change-status/{id}','UserController@changeStatus');
Route::get('{jobs}','IndexController@jobListing')->name('jobs');
