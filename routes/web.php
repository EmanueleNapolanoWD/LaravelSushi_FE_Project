<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


// rottte public
Route::get('/', [PublicController::class,'Home'])->name('HomePage');
route::get('/menu',[PublicController::class,'Menu'])->name('Menu');
route::get('/details/{id}',[PublicController::class ,'Details'])->name('Details');
route::get('/location',[PublicController::class,'Location'])->name('Location');
route::get('/contact-us',[PublicController::class,'ContactUs'])->name('ContactUs');
route::get('/services',[PublicController::class,'Services'])->name('Services');
route::get('/all-you-can-eat',[PublicController::class,'AYCE'])->name('AYCE');
// rotta post per Mail
route::POST('/send-mail',[PublicController::class,'MailSend'])->name('MailSend');
