<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TwilioController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RazorpayPaymentController;

         

Route::get('/', [HomeController::class, 'create']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('founder', [HomeController::class, 'founder']);
Route::get('about', [HomeController::class, 'about']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('login', [HomeController::class, 'login']);
Route::post('/get-comment', [HomeController::class, 'getComment'])->name('get-comment');
Route::get('/captcha/image', [CaptchaController::class, 'generateCaptcha'])->name('captcha.image');

Route::get('/adminpanel', [HomeController::class, 'admin']);

Route::post('feedback.store', [ContactController::class, 'store'])->name('feedback.store');
Route::post('razorpay', [RazorpayPaymentController::class, 'index'])->name('razorpay.create');

Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::get('/send-whatsapp', [TwilioController::class, 'sendWhatsAppMessage']);


Route::get('/generate-otp-form', [OtpController::class, 'showOtpForm'])->name('generate-otp-form');
Route::post('/generate-otp', [OtpController::class, 'generateOtp'])->name('generate-otp');


Route::get('/login', [AdminController::class, 'login'])->name('auth.login');
Route::get('/register', [AdminController::class, 'register'])->name('auth.register');
