<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;


Route::get('/', function(){
   return view ("welcome");
});

//Route::get('/', function(){
//    return view ("clients")
//}

//Route::get('/', function(){
//    return view ("about")
//}

//Route::get('/', function(){
//return view ("contact")
//}

//Route::view('/', 'welcome');
//Route::view('/clients', 'clients');
//Route::view('/about', 'about');
//Route::view('/contact', 'contact');


Route::get('index', [WebsiteController::class, 'index']);
Route::get('ourdivision', [WebsiteController::class, 'ourdivision']);
Route::get('orgchart', [WebsiteController::class, 'orgchart']);
Route::get('programs', [WebsiteController::class, 'programs']);
Route::get('citizencharter', [WebsiteController::class, 'citizencharter']);
Route::get('sdsoffice', [WebsiteController::class, 'sdsoffice']);
Route::get('asdsoffice', [WebsiteController::class, 'asdsoffice']);
Route::get('legal', [WebsiteController::class, 'legal']);
Route::get('ict', [WebsiteController::class, 'ict']);
Route::get('adminoffice', [WebsiteController::class, 'adminoffice']);
Route::get('cashier', [WebsiteController::class, 'cashier']);
Route::get('personnel', [WebsiteController::class, 'personnel']);
Route::get('records', [WebsiteController::class, 'records']);
Route::get('supply', [WebsiteController::class, 'supply']);
Route::get('genservices', [WebsiteController::class, 'genservices']);
Route::get('accounting', [WebsiteController::class, 'accounting']);
Route::get('budget', [WebsiteController::class, 'budget']);
Route::get('moneval', [WebsiteController::class, 'moneval']);
Route::get('sgodchief', [WebsiteController::class, 'sgodchief']);
Route::get('socmob', [WebsiteController::class, 'socmob']);
Route::get('planres', [WebsiteController::class, 'planres']);
Route::get('educfac', [WebsiteController::class, 'educfac']);
Route::get('health', [WebsiteController::class, 'health']);
Route::get('cidoffice', [WebsiteController::class, 'cidoffice']);
Route::get('lrms', [WebsiteController::class, 'lrms']);
Route::get('eps', [WebsiteController::class, 'eps']);
Route::get('psds', [WebsiteController::class, 'psds']);
Route::get('elementary', [WebsiteController::class, 'elementary']);
Route::get('secondary', [WebsiteController::class, 'secondary']);
Route::get('integrated', [WebsiteController::class, 'integrated']);
Route::get('private', [WebsiteController::class, 'private']);
Route::get('calendar', [WebsiteController::class, 'calendar']);
Route::get('forms', [WebsiteController::class, 'forms']);
Route::get('advisory', [WebsiteController::class, 'advisory']);
Route::get('numbered', [WebsiteController::class, 'numbered']);
Route::get('unnumbered', [WebsiteController::class, 'unnumbered']);
Route::get('multimedia', [WebsiteController::class, 'multimedia']);
Route::get('resourcematerials', [WebsiteController::class, 'resourcematerials']);
Route::get('rpms', [WebsiteController::class, 'rpms']);
Route::get('bidding', [WebsiteController::class, 'bidding']);
Route::get('app', [WebsiteController::class, 'app']);
Route::get('earlyproc', [WebsiteController::class, 'earlyproc']);
Route::get('procmonitoring', [WebsiteController::class, 'procmonitoring']);
Route::get('contact', [WebsiteController::class, 'contact']);
