<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\BedTypeController;
use App\Http\Controllers\Admin\BlogArticleController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CouponCodeController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\HotelBooking;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\RejectedVendorController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoomTypeController;
use App\Http\Controllers\Admin\SeightSeeingController;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\StatusUpdateController;
use App\Http\Controllers\Admin\StayController;
use App\Http\Controllers\Admin\UpdateHotelPopularityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Front\FrontendReviewController;
use App\Http\Controllers\Front\FrontEndViewsController;
use App\Http\Controllers\User\SocialiteController;
use App\Http\Controllers\User\UpdatePasswordController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\VerifyEmailController;
use App\Http\Controllers\User\VerifyPhoneController;
use App\Http\Controllers\Vendor\FetchDetailsController;
use App\Http\Controllers\Vendor\VendorAuthController;
use App\Http\Controllers\Vendor\VendorBookingsController;
use App\Http\Controllers\Vendor\VendorHotelController;
use App\Http\Controllers\Vendor\VendorIncomeController;
use App\Http\Controllers\Vendor\VendorReferralController;
use App\Http\Controllers\Vendor\VendorRoomController;
use App\Http\Controllers\Vendor\VendorSettingsController;
use Illuminate\Support\Facades\Route;




// ------------------------- Front View ---------------------------------------

Route::get('/', [FrontEndViewsController::class, 'index'])->name('front.home');
Route::get('/contact', [FrontEndViewsController::class, 'contactus'])->name('front.contactus');
Route::get('/all-packages', [FrontEndViewsController::class, 'packages'])->name('front.packages');
Route::get('/all-hotels', [FrontEndViewsController::class, 'hotels'])->name('front.hotels');
Route::get('/hotel-detail/{id}', [FrontEndViewsController::class, 'hoteldetail'])->name('front.hotel-detail');
Route::get('package/{id}', [FrontEndViewsController::class, 'packagedetail'])->name('front.package-detail');
Route::get('/sight-seeing', [FrontEndViewsController::class, 'seightseeing'])->name('front.seight-seeing');
Route::get('/search', [FrontEndViewsController::class, 'search'])->name('front.search');

//----------------------------  User ------------------------------------------


Route::get('/user/view-login', [UserAuthController::class, 'viewSignin'])->name('user.view-login');
Route::get('/user/view-register', [UserAuthController::class, 'viewRegister'])->name('user.view-signup');
Route::post('/user/register', [UserAuthController::class, 'register'])->name('user.register');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('user.login');

Route::get('auth/verify-email/{id}/{code}', [VerifyEmailController::class, 'verifyEmail'])
    ->name('user.verify-email');

Route::get('auth/{driver}', [SocialiteController::class, 'redirect'])->name('social.redirect');
Route::get('auth/{driver}/callback', [SocialiteController::class, 'callback'])->name('social.callback');

Route::get('forget-password', [UserAuthController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [UserAuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [UserAuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [UserAuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::group(['prefix' => 'user', 'middleware' => 'App\Http\Middleware\isUser'], function () {

    Route::get('/view-profile', [UserProfileController::class, 'profile'])->name('user.view-profile');
    Route::put('/update-profile', [UserProfileController::class, 'UpdateProfile'])->name('profile.update');
    Route::get('/verify-email', [VerifyEmailController::class, 'reVerifyEmail'])->name('verify-auth-user-verifyEmail');
    Route::get('/verify-phone', [VerifyPhoneController::class, 'verifyPhone'])->name('user.verify-phone');
    Route::put('update-image', [UserProfileController::class, 'updateImage'])->name('update.image');
    Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('user.dashboard');
    Route::post('/verify-aadhaar', [UserAuthController::class, 'verifyAdhar'])->name('user.verify-aadhaar');

    Route::get('update-password-view', [UpdatePasswordController::class, 'updatedPasswordView'])->name('user.update-password-view');
    Route::put('update-password', [UpdatePasswordController::class, 'updatePassword'])->name('password-update');

    Route::get('/change-password', [UserAuthController::class, 'changepassword'])->name('user.view-change-password');
    Route::get('/event-booking', [UserAuthController::class, 'eventbooking'])->name('user.view-event-booking');
    Route::get('/travel-booking', [UserAuthController::class, 'travelbooking'])->name('user.view-travel-booking');
    Route::get('/hotel-booking', [UserAuthController::class, 'hotelbooking'])->name('user.view-hotel-booking');
    Route::get('/payments', [UserAuthController::class, 'payments'])->name('user.view-payments');
    Route::get('/view-claimrefund', [UserAuthController::class, 'claimrefund'])->name('user.view-claimrefund');
    Route::get('/logout', [UserAuthController::class, 'logout'])->name('user.logout');

    Route::post('package/review/{id}', [FrontendReviewController::class, 'packageReview'])
        ->name('user.package-review');
    Route::post('hotel/review/{id}', [FrontendReviewController::class, 'hotelReview'])
        ->name('user.hotel-review');

});


//---------------------------------  Admin ---------------------------------

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.view-login');
Route::post('admin/store', [AdminAuthController::class, 'store'])->name('admin.store');

Route::group(['prefix' => 'admin', 'middleware' => 'App\Http\Middleware\isAdmin'], function () {

    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [AdminAuthController::class, 'index'])->name('admin.dashboard');

    Route::resource('/hotel-booking', HotelBooking::class);
    Route::resource('/blog-article', BlogArticleController::class);
    Route::resource('/coupon-code', CouponCodeController::class);
    Route::resource('/coupon', CouponController::class);
    Route::resource('/hotel', HotelController::class);
    Route::put('/update-hotel-popularity/{id}', UpdateHotelPopularityController::class)->name('update-hotel-popularity');
    Route::resource('/location', LocationController::class);
    Route::resource('/state', StateController::class);
    Route::resource('/city', CityController::class);
    Route::resource('/package', PackageController::class);
    Route::resource('/query', QueryController::class);
    Route::resource('/referral', VendorReferralController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/sight-seeing', SeightSeeingController::class);
    Route::resource('/service', ServiceTypeController::class);
    Route::resource('/bed', BedTypeController::class);
    Route::resource('/property', PropertyController::class);
    Route::resource('/room', RoomTypeController::class);
    Route::resource('/stay', StayController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/setting', AdminSettingController::class);
    Route::resource('/vendor', VendorController::class);
    Route::resource('/rejected-vendor', RejectedVendorController::class);
//    Route::get('/hotel/{id}', [FetchDetailsController::class, 'fetchHotel'])->name('hotels-fetch');

    Route::get('/update-status/{id}', [StatusUpdateController::class, 'updateStatus'])->name('vendor-update.status');

});


// ---------------------------------- Vendor ---------------------------------
Route::get('/vendor/login', [VendorAuthController::class, 'viewlogin'])->name('vendor.view-login');
Route::post('vendor/store', [VendorAuthController::class, 'login'])->name('vendor.login');
Route::get('/vendor/register', [VendorAuthController::class, 'register'])->name('vendor.register');
Route::post('/vendor/register-vendor', [VendorAuthController::class, 'registerVendor'])->name('vendor.register-vendor');

Route::group(['prefix' => 'vendor', 'middleware' => 'App\Http\Middleware\isVendor'], function () {

    Route::get('/logout', [VendorAuthController::class, 'logout'])->name('vendor.logout');
    Route::get('/dashboard', [VendorAuthController::class, 'index'])->name('vendor.dashboard');

    Route::resource('/vendor-hotel', VendorHotelController::class);
    Route::resource('/vendor-room', VendorRoomController::class);
    Route::resource('/vendor-bookings', VendorBookingsController::class);
    Route::resource('/vendor-referral', VendorReferralController::class);
    Route::resource('/vendor-income', VendorIncomeController::class);
    Route::resource('/vendor-settings', VendorSettingsController::class);
    Route::get('/fetch-cities', [FetchDetailsController::class, 'fetchCities'])->name('cities-fetch');

});


























//    Route::get('hotel/attributes', [AttributeController::class, 'attributes'])->name('attribute');

//    Route::post('hotel/bed-type', [AttributeController::class, 'createBedType'])->name('bed.create');

//    Route::post('hotel/property-type', [AttributeController::class, 'createPropertyType'])->name('property.create');

//    Route::post('hotel/service-type', [AttributeController::class, 'createServiceType'])->name('service.create-service');
//
//    Route::post('hotel/room-type', [AttributeController::class, 'createRoomType'])->name('room.create');
//
//    Route::get('view-attributes', [AttributeController::class, 'viewAttributes'])->name('view-attributes');
//
//        Route::get('show-room/{id}', [AttributeController::class, 'showRoom'])
//            ->name('room.show');
//    Route::put('room/update/{id}', [AttributeController::class, 'updateRoom'])->name('room.update');
//
//        Route::get('show-bed/{id}', [AttributeController::class, 'showBed'])
//            ->name('bed.show');
//    Route::put('bed/update/{id}', [AttributeController::class, 'updateBed'])->name('bed.update');
//
//        Route::get('show-property/{id}', [AttributeController::class, 'showProperty'])
//            ->name('property.show');
//    Route::put('property/update/{id}', [AttributeController::class, 'updateProperty'])->name('property.update');
//
//
//        Route::get('show-service/{id}', [AttributeController::class, 'showService'])
//            ->name('service.show');
//    Route::put('service/update/{id}', [AttributeController::class, 'updateService'])->name('service.update');
//
//    Route::get('show-{type}/{id}', [AttributeController::class, 'showServices'])->name('service.show');
