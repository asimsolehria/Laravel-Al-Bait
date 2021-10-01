<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\Supplier_ProfileController;
use App\Http\Controllers\Project_ProfileController;
use App\Http\Controllers\Client_ProfileController;
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

Route::middleware('web')->group(base_path('routes/portal.php'));
Route::get('/', 'HomeController@index')->name('home');
Route::post('/lang','HomeController@setLang')->name('lang');
Auth::routes();
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index','UserController@index')->name('index');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('permissions','PermissionController');

    Route::get('/',  'HomeController@index')->name('portal.dashboard');

    // Route::get('/chartofaccount/add',  'ChartofAccountController@create')->name('portal.chart.create');




    Route::resource('chartofaccount','ChartofAccountController');
    Route::match(['get', 'post'],'chartofaccount/nextlevel/{gl_code}','ChartofAccountController@chartofaccount_nextlevel')->name('chartofaccount.nextlevel');

    Route::resource('procurement','ProcurementController');
    Route::match(['get', 'post'],'procurement/nextlevel/{gl_code}','ProcurementController@chartofaccount_nextlevel')->name('procurement.nextlevel');

    Route::resource('supplier','Supplier_ProfileController');
    Route::resource('project','Project_ProfileController');
    Route::resource('client','Client_ProfileController');
	
	// HR Routes
	Route::get('hr/employes','hrController@index')->name('hr.employes.index');
    Route::get('hr/employes/create','hrController@create')->name('hr.employes.create');
    Route::match(['get','post'],'hr/employes/store','hrController@store')->name('hr.employes.store');
    Route::get('hr/employes/employesshow','hrController@show')->name('hr.employes.employesshow');
    Route::get('hr/employes/edit/{id}', 'hrController@edit')->name('hr.employes.edit');
    Route::post('hr/employes/update/{id}','hrController@update')->name('hr.employes.update');
    Route::get('hr/employes/destroy/{id}', 'hrController@destroy')->name('hr.employes.destroy');
    Route::get('hr/employes/show/{id}', 'hrController@show')->name('hr.employes.show');

    // Route::get('hr/employes/show','hrController@empeducationshow')->name('hr.employes.show');
    Route::get('hr/employeseducation/create/{id}','hreducationController@create')->name('hr.employeseducation.create');
    Route::post('hr/employeseducation/store','hreducationController@store')->name('hr.employeseducation.store');
    Route::get('hr/employeseducation/destroy/{id}', 'hreducationController@destroy')->name('hr.employeseducation.destroy');

    Route::get('hr/experiences/create/{id}','hrexpericenesController@create')->name('hr.experiences.create');
    Route::post('hr/experiences/store','hrexpericenesController@store')->name('hr.experiences.store');
    Route::get('hr/experiences/destroy/{id}', 'hrexpericenesController@destroy')->name('hr.experiences.destroy');

    Route::get('hr/postingpromotion/create/{id}','EmployePostingPromotionController@create')->name('hr.postingpromotion.create');
    Route::post('hr/postingpromotion/store','EmployePostingPromotionController@store')->name('hr.postingpromotion.store');
    Route::get('hr/postingpromotion/destroy/{id}', 'EmployePostingPromotionController@destroy')->name('hr.postingpromotion.destroy');


    Route::get('hr/rewards/create/{id}','RewardController@create')->name('hr.rewards.create');
    Route::post('hr/rewards/store','RewardController@store')->name('hr.rewards.store');
    Route::get('hr/rewards/destroy/{id}', 'RewardController@destroy')->name('hr.rewards.destroy');

    Route::get('hr/disciplinaryaction/create/{id}','DisciplinaryActionController@create')->name('hr.disciplinaryaction.create');
    Route::post('hr/disciplinaryaction/store','DisciplinaryActionController@store')->name('hr.disciplinaryaction.store');
    Route::get('hr/disciplinaryaction/destroy/{id}', 'DisciplinaryActionController@destroy')->name('hr.disciplinaryaction.destroy');



    Route::get('hr/payscale/index','PayscaleController@index')->name('hr.payscale.index');
    Route::get('hr/payscale/add','PayscaleController@create')->name('hr.payscale.add');
    Route::post('hr/payscale/store','PayscaleController@store')->name('hr.payscale.store');
    Route::get('hr/payscale/edit/{id}', 'PayscaleController@edit')->name('hr.payscale.edit');
    Route::post('hr/payscale//update/{id}','PayscaleController@update')->name('hr.payscale.update');
    Route::get('hr/payscale/destroy/{id}', 'PayscaleController@destroy')->name('hr.payscale.destroy');

    Route::get('hr/designation/index','DesignationController@index')->name('hr.designation.index');
    Route::get('hr/designation/add','DesignationController@create')->name('hr.designation.add');
    Route::post('hr/designation/store','DesignationController@store')->name('hr.designation.store');
    Route::get('hr/designation/edit/{id}', 'DesignationController@edit')->name('hr.designation.edit');
    Route::post('hr/designation//update/{id}','DesignationController@update')->name('hr.designation.update');
    Route::get('hr/designation/destroy/{id}', 'DesignationController@destroy')->name('hr.designation.destroy');


    Route::get('hr/disciplinaryactiontype/index','DisciplinaryActionTypeController@index')->name('hr.disciplinaryactiontype.index');
    Route::get('hr/disciplinaryactiontype/add','DisciplinaryActionTypeController@create')->name('hr.disciplinaryactiontype.add');
    Route::post('hr/disciplinaryactiontype/store','DisciplinaryActionTypeController@store')->name('hr.disciplinaryactiontype.store');
    Route::get('hr/disciplinaryactiontype/edit/{id}', 'DisciplinaryActionTypeController@edit')->name('hr.disciplinaryactiontype.edit');
    Route::post('hr/disciplinaryactiontype/update/{id}','DisciplinaryActionTypeController@update')->name('hr.disciplinaryactiontype.update');
    Route::get('hr/disciplinaryactiontype/destroy/{id}', 'DisciplinaryActionTypeController@destroy')->name('hr.disciplinaryactiontype.destroy');


    Route::get('acrgrading','AcrGradingController@index')->name('hr.acrgrading.index');
    Route::get('acrgrading/add','AcrGradingController@create')->name('hr.acrgrading.add');
    Route::post('acrgrading/store','AcrGradingController@store')->name('hr.acrgrading.store');
    Route::get('acrgrading/edit/{id}', 'AcrGradingController@edit')->name('hr.acrgrading.edit');
    Route::post('acrgrading/update/{id}','AcrGradingController@update')->name('hr.acrgrading.update');
    Route::get('acrgrading/destroy/{id}', 'AcrGradingController@destroy')->name('hr.acrgrading.destroy');

    Route::get('acrfactorevaluationtypes','AcrFactorEvaluationTypesController@index')->name('hr.acrfactorevaluationtypes.index');
    Route::get('acrfactorevaluationtypes/add','AcrFactorEvaluationTypesController@create')->name('hr.acrfactorevaluationtypes.add');
    Route::post('acrfactorevaluationtypes/store','AcrFactorEvaluationTypesController@store')->name('hr.acrfactorevaluationtypes.store');
    Route::get('acrfactorevaluationtypes/edit/{id}', 'AcrFactorEvaluationTypesController@edit')->name('hr.acrfactorevaluationtypes.edit');
    Route::post('acrfactorevaluationtypes/update/{id}','AcrFactorEvaluationTypesController@update')->name('hr.acrfactorevaluationtypes.update');
    Route::get('acrfactorevaluationtypes/destroy/{id}', 'AcrFactorEvaluationTypesController@destroy')->name('hr.acrfactorevaluationtypes.destroy');

    Route::get('acrevaluationfactor','AcrEvaluationFactorController@index')->name('hr.acrevaluationfactor.index');
    Route::get('acrevaluationfactor/add','AcrEvaluationFactorController@create')->name('hr.acrevaluationfactor.add');
    Route::post('acrevaluationfactor/store','AcrEvaluationFactorController@store')->name('hr.acrevaluationfactor.store');
    Route::get('acrevaluationfactor/edit/{id}', 'AcrEvaluationFactorController@edit')->name('hr.acrevaluationfactor.edit');
    Route::post('acrevaluationfactor/update/{id}','AcrEvaluationFactorController@update')->name('hr.acrevaluationfactor.update');
    Route::get('acrevaluationfactor/destroy/{id}', 'AcrEvaluationFactorController@destroy')->name('hr.acrevaluationfactor.destroy');

    Route::get('hr/acremployeerecord/create/{id}','AcrEmployeeRecordController@create')->name('hr.acremployeerecord.create');
    Route::post('hr/acremployeerecord/store','AcrEmployeeRecordController@store')->name('hr.acremployeerecord.store');
    Route::get('hr/acremployeerecord/destroy/{id}', 'AcrEmployeeRecordController@destroy')->name('hr.acremployeerecord.destroy');

    Route::get('appraisalcases','AppraisalCasesController@index')->name('hr.appraisalcases.index');
    Route::get('hr/appraisalcases/create/{id}','AppraisalCasesController@create')->name('hr.appraisalcases.create');
    Route::post('hr/appraisalcases/store','AppraisalCasesController@store')->name('hr.appraisalcases.store');


    Route::get('acrpart4','acrpart4Controller@index')->name('hr.acrpart4.index');
    Route::get('hr/acrpart4/create/{id}','acrpart4Controller@create')->name('hr.acrpart4.create');
    Route::post('hr/acrpart4/store','acrpart4Controller@store')->name('hr.acrpart4.store');


    Route::get('hrreport','hrReportController@hrreport')->name('hr.hrreport.report');

    Route::get('hr/bankaccounttype/index','BankAccountTypeController@index')->name('hr.bankaccounttype.index');
    Route::get('hr/bankaccounttype/add','BankAccountTypeController@create')->name('hr.bankaccounttype.add');
    Route::post('hr/bankaccounttype/store','BankAccountTypeController@store')->name('hr.bankaccounttype.store');
    Route::get('hr/bankaccounttype/edit/{id}', 'BankAccountTypeController@edit')->name('hr.bankaccounttype.edit');
    Route::post('hr/bankaccounttype//update/{id}','BankAccountTypeController@update')->name('hr.bankaccounttype.update');
    Route::get('hr/bankaccounttype/destroy/{id}', 'BankAccountTypeController@destroy')->name('hr.bankaccounttype.destroy');

    Route::get('hr/bankdetails/create/{id}','BankDetailsController@create')->name('hr.bankdetails.create');
    Route::post('hr/bankdetails/store','BankDetailsController@store')->name('hr.bankdetails.store');
    Route::get('hr/bankdetails/destroy/{id}', 'BankDetailsController@destroy')->name('hr.bankdetails.destroy');

    Route::get('countries','CountriesController@index')->name('countries.index');
    Route::get('countries/add','CountriesController@create')->name('countries.add');
    Route::post('countries/store','CountriesController@store')->name('countries.store');
    Route::get('countries/edit/{id}', 'CountriesController@edit')->name('countries.edit');
    Route::post('countries/update/{id}','CountriesController@update')->name('countries.update');
    Route::get('countries/destroy/{id}', 'CountriesController@destroy')->name('countries.destroy');
});