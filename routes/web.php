<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SpecializeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FrontPage;
use App\Http\Controllers\AboutPage;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AccountSetting;
use App\Http\Controllers\AllPage;
use App\Http\Controllers\DetailController;

Route::get('/', [FrontPage::class,'show_home']);
Route::get('/about/about-us', [AllPage::class,'show_page']);
Route::get('/about/board-members', [AllPage::class,'show_member']);
Route::get('/about/organization-chart', [AllPage::class,'show_chart']);
Route::get('/about/legal-documents', [AllPage::class,'show_legal']);
Route::get('/service/{page}', [AllPage::class,'show_service']);
Route::get('/procedure/{page}', [AllPage::class,'show_procedure']);
Route::get('/group/{page}', [AllPage::class,'show_group']);
// Route::get('/procedure', [AllPage::class,'show_procedure']);

Route::get('/manpower-category/{page}', [FrontPage::class,'manpower_category']);
Route::get('/notice', [AllPage::class,'show_notice']);
Route::get('/notice/{page}', [AllPage::class,'show_notice_detail']);
Route::get('/gallery', [AllPage::class,'show_gallery']);
Route::get('/contact', [AllPage::class,'show_contact']);
Route::get('/jobs', [AllPage::class,'show_jobs']);
Route::get('/jobs/{id}', [AllPage::class,'show_jobs_details']);

// Route For Login Page
Route::view('adminpanel','admin.login')->middleware('AlreadyLoggedIn');
Route::view('login','admin.login')->middleware('AlreadyLoggedIn');
Route::view('admin/login','admin.login')->middleware('AlreadyLoggedIn');
Route::post('admin/users',[UserLogin::class,'login']);
Route::get('admin/create', [UserLogin::class,'create_admin']); 
// To create first user use this route
Route::get('admin/logout', [UserLogin::class,'logout']);

Route::middleware(['isLogin'])->group(function () 
{
    Route::post('admin/imageuploads',[CkeditorController::class,'uploads'])->name('post.uploads');
    Route::get('admin/dashboard', [UserLogin::class,'dashboard']);
    Route::resource('admin/post',PostController::class);
    Route::resource('admin/post/{id}/edit',PostController::class);
    Route::resource('admin/post',PostController::class); 
    // This is for delete but /{id} is not used

    Route::get('admin/about', [AboutController::class,'show_about']);   
    Route::post('admin/about', [AboutController::class,'add_about']);
    Route::get('admin/about/{id}/edit', [AboutController::class,'edit_about']);
    Route::post('admin/about/{id}', [AboutController::class,'save_about']);
    Route::get('admin/about/{id}/delete', [AboutController::class,'delete_about']);

    Route::get('admin/service', [ServiceController::class,'show_service']);   
    Route::post('admin/service', [ServiceController::class,'add_service']);   
    Route::get('admin/service/{id}/edit', [ServiceController::class,'edit_service']); 
    Route::post('admin/service/{id}', [ServiceController::class,'save_service']); 
    Route::get('admin/service/{id}/delete', [ServiceController::class,'delete_service']);  

    Route::get('admin/procedure', [ProcedureController::class,'show_procedure']);   
    Route::post('admin/procedure', [ProcedureController::class,'add_procedure']);   
    Route::get('admin/procedure/{id}/edit', [ProcedureController::class,'edit_procedure']); 
    Route::post('admin/procedure/{id}', [ProcedureController::class,'save_procedure']); 
    Route::get('admin/procedure/{id}/delete', [ProcedureController::class,'delete_procedure']);

    Route::get('admin/group', [GroupController::class,'show_group']);
    Route::post('admin/group', [GroupController::class,'add_group']);
    Route::get('admin/group/{id}/edit', [GroupController::class,'edit_group']); 
    Route::post('admin/group/{id}', [GroupController::class,'save_group']); 
    Route::get('admin/group/{id}/delete', [GroupController::class,'delete_group']);

    Route::get('admin/news', [NewsController::class,'show_news']);   
    Route::post('admin/news', [NewsController::class,'add_news']);   
    Route::post('admin/news/{id}', [NewsController::class,'save_news']); 
    Route::get('admin/news/{id}/edit', [NewsController::class,'edit_news']); 
    Route::get('admin/news/{id}/delete', [NewsController::class,'delete_news']);

    Route::get('admin/vacancy', [VacancyController::class,'show_vacancy']);   
    Route::post('admin/vacancy', [VacancyController::class,'add_vacancy']);
    Route::get('admin/vacancy/{id}/edit', [VacancyController::class,'edit_vacancy']);
    Route::post('admin/vacancy/{id}/save', [VacancyController::class,'save_vacancy']);
    Route::get('admin/vacancy/{id}/delete', [VacancyController::class,'delete_vacancy']);

    Route::get('admin/gallery', [GalleryController::class,'show_gallery']);  
    Route::post('admin/gallery', [GalleryController::class,'add_gallery']);
    Route::get('admin/gallery/{id}/edit', [GalleryController::class,'edit_gallery']);
    Route::post('admin/gallery/{id}', [GalleryController::class,'save_gallery']);
    Route::get('admin/gallery/{id}/delete', [GalleryController::class,'delete_gallery']);

    Route::get('admin/legal_document', [LegalController::class,'show_legal_document']);  
    Route::post('admin/legal_document', [LegalController::class,'add_legal_document']);
    Route::get('admin/legal_document/{id}/edit', [LegalController::class,'edit_legal_document']);
    Route::post('admin/legal_document/{id}', [LegalController::class,'save_legal_document']);
    Route::get('admin/legal_document/{id}/delete', [LegalController::class,'delete_legal_document']);


    Route::get('admin/download',[DownloadController::class,'show_download']);
    Route::post('admin/download',[DownloadController::class,'add_download']);
    Route::get('admin/download/{id}/edit',[DownloadController::class,'edit_download']);
    Route::post('admin/download/{id}/save',[DownloadController::class,'save_download']);
    Route::get('admin/download/{id}/delete',[DownloadController::class,'delete_download']);

    Route::get('admin/banner', [BannerController::class,'show_banner']);   
    Route::post('admin/banner', [BannerController::class,'add_banner']); 
    Route::post('admin/banner/{id}', [BannerController::class,'save_banner']);  
    Route::get('admin/banner/{id}/edit', [BannerController::class,'edit_banner']); 
    Route::get('admin/banner/{id}/delete', [BannerController::class,'delete_banner']); 

    Route::get('admin/specialize', [SpecializeController::class,'show_specialize']);   
    // Route::post('admin/about', [AboutController::class,'add_about']);
    Route::get('admin/specialize/{id}/edit', [SpecializeController::class,'edit_specialize']);
    Route::post('admin/specialize/{id}', [SpecializeController::class,'save_specialize']);
    

    Route::get('admin/job', [JobController::class,'show_job']);   
    Route::post('admin/job', [JobController::class,'add_job']); 
    Route::get('admin/job/{id}/edit', [JobController::class,'edit_job']);
    Route::post('admin/job/{id}', [JobController::class,'save_job']);
    Route::get('admin/job/{id}/delete', [JobController::class,'delete_job']);

    Route::get('admin/client', [ClientController::class,'show_client']);   
    Route::post('admin/client', [ClientController::class,'add_client']); 
    Route::get('admin/client/{id}/edit', [ClientController::class,'edit_client']);
    Route::post('admin/client/{id}', [ClientController::class,'save_client']);
    Route::get('admin/client/{id}/delete', [ClientController::class,'delete_client']);

    Route::get('admin/testimonial', [TestimonialController::class,'show_testimonial']);   
    Route::post('admin/testimonial', [TestimonialController::class,'add_testimonial']); 
Route::get('admin/testimonial/{id}/edit', [TestimonialController::class,'edit_testimonial']);
    Route::post('admin/testimonial/{id}', [TestimonialController::class,'save_testimonial']);
    Route::get('admin/testimonial/{id}/delete', [TestimonialController::class,'delete_testimonial']);

    // Account Setting
    Route::get('admin/account-setting',[AccountSetting::class,'account_setting']);
    Route::post('admin/account-setting/{id}',[AccountSetting::class,'save_setting']);

    Route::get('admin/website-detail', [DetailController::class,'show_detail']);   
    Route::post('admin/save-detail/{id}', [DetailController::class,'save_detail']);  

    Route::get('admin/social-media', [SocialController::class,'show_detail']);   
    Route::post('admin/save-social/{id}', [SocialController::class,'save_detail']);   


});

