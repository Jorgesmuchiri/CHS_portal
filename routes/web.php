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



Auth::routes();
Route::get('my-notification/{type}', 'HomeController@myNotification');


Route::get('/usersworkers', 'UserController@adminlogin');

Route::get('/send/email', 'HomeController@mail');



Route::resource('enquiry', 'EnquiryController', ['except' => ['show']]);

Route::resource('book', 'BookingsController', ['except' => ['show']]);

Route::resource('events', 'EventsController', ['except' => ['show']]);

Route::resource('announcement', 'AnnouncementsController', ['except' => ['show']]);



Route::resource('courses', 'CoursesController', ['except' => ['show']]);


Route::resource('enrol', 'EnrollmentController', ['except' => ['show']]);


Route::resource('pcourses', 'PopularCoursesController', ['except' => ['show']]);






Route::get('/', 'PopularCoursesController@home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/enrollment', function () {
    return view('enrol');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/admission', function () {
    return view('admissions');
});


Route::get('/admin', function () {
    return view('admin');
});


Route::get('/adminadd-course', function () {
    return view('admin-add-course');
});


Route::get('/add-course', function () {
    return view('add-course');
});


Route::get('/admin-event-add', function () {
    return view('admin-event-add');
});

Route::get('/admin-announcement-add', function () {
    return view('admin-announcement-add');
});



Route::get('/admissionenquiries', function () {
    return view('admission-enquiry');
});




Route::get('/admin-event-all', function () {
    return view('admin-event-all');
});



Route::get('/contact', function () {
    return view('contact');
});



Route::get('/booking', function () {
    return view('booking');
});



Route::get('/partners', function () {
    return view('partners');
});


Route::get('/academics', function () {
    return view('academics');
});

Route::get('/announcements', function () {
    return view('announcements');
});

Route::get('/HEINascop', function () {
    return view('HEINascop');
});

Route::get('/HIVMNascop', function () {
    return view('HIVMNascop');
});

Route::get('/NASCOP', function () {
    return view('NASCOP');
});

Route::get('/ARTNascop', function () {
    return view('ARTNascop');
});

Route::get('/DDIUNascop', function () {
    return view('DDIUNascop');
});


Route::get('/CertificateCourses', function () {
    return view('CertificateCourses');
});
Route::get('/elearning', function () {
    return view('elearning');
});
Route::get('/EPBIO', function () {
    return view('EPIBIO');
});


Route::get('/BiostatisticsCertificate', function () {
    return view('BiostatisticsCertificate');
});

Route::get('/CommunityBasedHIVCert', function () {
    return view('CommunityBasedHIVCert');
});

Route::get('/CommunicationHIVCert', function () {
    return view('CommunicationHIVCert');
});


Route::get('/EpidemiologyCertificate', function () {
    return view('EpidemiologyCertificate');
});

Route::get('/Procurement&LogisticsCert', function () {
    return view('Procurement&LogisticsCert');
});

Route::get('/HumanResourcesCert', function () {
    return view('HumanResourcesCert');
});


Route::get('/ResourcesMobilizationCert', function () {
    return view('ResourcesMobilizationCert');
});


Route::get('/EPBIOCert', function () {
    return view('EPBIOCert');
});

Route::get('/HEALTHCAREFINANCING', function () {
    return view('HEALTHCAREFINANCING');
});

Route::get('/HumanResourcesCert', function () {
    return view('HumanResourcesCert');
});



Route::get('/HealthInformaticsCertificate', function () {
    return view('HealthInformaticsCertificate');
});


Route::get('/EPBIODiploma', function () {
    return view('EPBIODiploma');
});
Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/HealthEconomics', function () {
    return view('HealthEconomics');
});

Route::get('/HealthEconomicsDiploma', function () {
    return view('HealthEconomicsDiploma');
});

Route::get('/HealthEconomicsDiploma(9 Months Track)', function () {
    return view('HealthEconomicsDiploma(9 Months Track)');
});
Route::get('/HealthInformatics', function () {
    return view('HealthInformatics');
});

Route::get('/HealthInformaticsDiploma', function () {
    return view('HealthInformaticsDiploma');
});


Route::get('/HealthInformaticsDiploma(9 Months Track)', function () {
    return view('HealthInformatics(9 Month Track)');
});


Route::get('/MonitoringEvaluation', function () {
    return view('MonitoringEvaluation');
});

Route::get('/MeasuringEfficiencyCert', function () {
    return view('MeasuringEfficiencyCert');
});

Route::get('/MonitoringEvaluationDiploma', function () {
    return view('Monitoring&EvaluationDiploma');
});


Route::get('/Monitoring&EvaluationCert', function () {
    return view('Monitoring&EvaluationCert');
});

Route::get('/Monitoring&EvaluationDiploma(9 Month Track)', function () {
    return view('Monitoring&EvaluationDiploma(9 Month Track)');
});

Route::get('/PostGraduateDiploma', function () {
    return view('PostGraduateDiploma');
});

Route::get('/PostMasters', function () {
    return view('PostMasters');
});


Route::get('/ProgramManagement', function () {
    return view('ProgramManagement');
});


Route::get('/principal', function () {
    return view('principal');
});

Route::get('/ProgramManagementCert', function () {
    return view('ProgramManagementCert');
});


Route::get('/ProgramManagementCert', function () {
    return view('ProgrammeManagementCert');
});


Route::get('/ProgramManagementDiploma', function () {
    return view('ProgramManagementDiploma');
});


Route::get('/ProgramManagementDiploma(9 Month Track)', function () {
    return view('ProgramManagementDiploma(9 Month Track)');
});


Route::get('/research', function () {
    return view('research');
});


Route::get('/projects', function () {
    return view('projects');
});
Route::get('/allcourses', function () {
    return view('all-courses');
});


Route::get('/UNITID Certificate', function () {
    return view('UNITID_Certificate');
});




Route::get('/error', function () {
    return view('error');
});



// Route::post('/jobs', function () {
//     return view('/registration/job')->name('jobs');

// });

Route::get('/contact', function () {
    return view('contact');

});

Route::get('users', 'UserController@index');




Route::get('/login', function () {
    return view('/login/index');
});

Route::get('/sign-up', function () {
    return view('/login/register');
});

Route::get('/get-user', 'UserController@getUser');

// Route::post('/login', 'UserController@login');
Route::post('/adminlogin', 'UserController@adminlogin');
Route::post('/register', 'UserController@create');



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::group(['middleware' => 'auth'], function () {



Route::get('/job', function () {
    return view('/registration/job');
});


Route::get('/profile', function () {
    return view('/registration/profile');
});

Route::get('/worker', function () {
    return view('registration/worker')->name('worker');
});


Route::get('/worker', function () {
    return view('registration/worker')->name('worker');
});







Route::post('/jobs', 'JobsController@create');
Route::post('/work', 'WorkersController@create');
Route::post('/apply', 'JobApplicationsController@create');



Route::get('/allJobs', 'JobsController@index');
Route::get('/jobdetails/{id}', 'JobsController@jobdetails');


});












    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
