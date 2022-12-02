<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\TimeSlotController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PackageController;
use App\Mail\BookingConfirmed;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('storage-link', function(){
    Artisan::call('reminder:email');
    return "done";
});

//frontend routes
Route::view('/', 'welcome')->name('welcome');
//Route::get('/send-mail', function (){
//    $booking = \App\Models\Booking::find(14);
//
//    $user = User::find(2);
////    Notification::send($user, new \App\Notifications\notifyUser());
////    die;
//    Mail::to("tayyibyasin786@gmail.com")->send(new BookingConfirmed($booking));die;
//});

Route::post('/make-appointment', [\App\Http\Controllers\AppointmentController::class, 'index'])->name('make_appointment');
Route::get('/services', [\App\Http\Controllers\BookingController::class, 'services'])->name('services');
Route::get('/services/{service}/book', [\App\Http\Controllers\BookingController::class, 'calender'])->name('calender');
Route::get('/services/booking-form', [\App\Http\Controllers\BookingController::class, 'bookingForm'])->name('services.booking-form');
Route::post('/services/book', [\App\Http\Controllers\BookingController::class, 'guestBooking'])->name('services.book');


Route::view('/gutter-cleaning', 'frontend.gutter-cleaning')->name('gutter_cleaning');
Route::view('/solar-cleaning', 'frontend.solar-cleaning')->name('solar_cleaning');
Route::view('/contact-us', 'frontend.contact-us')->name('contact_us');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/packages', [PackageController::class, 'index'])->name('packages');
Route::get('/get-time-slots', [TimeSlotController::class, 'getTimeSlot'])->name('get_time_slots');

Route::post('request-an-estimate', [EstimateController::class, 'request'])->name('request_an_estimate');

Route::post('contact-us', [ContactUsController::class, 'contact'])->name('contact_admin');


//customer routes
Route::group(['prefix' => 'customer', 'as' => 'customer.', 'middleware' => ['auth', 'role:customer']], function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');


    Route::get('/bookings/active', function () {
        $bookings = \App\Models\Booking::with('slot')
            ->where('serviceable_id', auth()->user()->id)
            ->where('serviceable_type', 'App/User')
            ->where('active', 1)
            ->get();
        return view('customer.bookings.index', compact('bookings'));
    })->name('bookings');

    Route::get('bookings/{booking}/changeStatus', [\App\Http\Controllers\Customer\BookingController::class, 'changeStatus'])->name('bookings.changeStatus');
    Route::get('/services/book', [\App\Http\Controllers\BookingController::class, 'book'])->name('services.book');


    Route::get('subscriptions',  [\App\Http\Controllers\Customer\SubscriptionController::class, 'index'])->name('subscriptions');
    Route::get('/subscriptions/{subscription}', [\App\Http\Controllers\Customer\SubscriptionController::class, 'show'])->name('subscriptions.show');
    Route::delete('/subscriptions/{subscription}', [\App\Http\Controllers\Customer\SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');
    Route::get('/subscriptions/{subscription}/changeStatus', [\App\Http\Controllers\Customer\SubscriptionController::class, 'changeStatus'])->name('subscriptions.changeStatus');

    Route::get('/packages/{package}/subscribe', [PackageController::class, 'subscribe'])->name('packages.subscribe');

    Route::get('settings', [\App\Http\Controllers\UserController::class, 'edit'])->name('settings');
    Route::put('settings', [\App\Http\Controllers\UserController::class, 'update'])->name('settings.update');


});

//admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {

    Route::get('/dashboard', function (){
        $customers = User::whereHas('roles', function ($query) {
            $query->where('name', 'customer');
        })->count();

        $bookings = \App\Models\Booking::count();
        $finished_bookings = \App\Models\Booking::where('active',0)->count();
        $subscriptions = \App\Models\Subscription::count();
        return view('dashboard', compact('customers','bookings','finished_bookings','subscriptions'));

    })->name('dashboard');



    Route::get('slot-management', [TimeSlotController::class, 'slotDays'])->name('slot_management');
    Route::get('slot-days/{day}', [TimeSlotController::class, 'slots'])->name('slot_days.index');
    Route::get('slot-day/{day}', [TimeSlotController::class, 'change'])->name('slot_days.change');
    Route::get('time-day/{day}', [TimeSlotController::class, 'changetime'])->name('time_days.change');

    Route::get('Block-list', [TimeSlotController::class, 'blockList'])->name('blocklist.index');
    Route::post('Block-list', [TimeSlotController::class, 'blockListAdd'])->name('blocklist.store');
    Route::get('Block-list/delete/{date}', [TimeSlotController::class, 'blockListDelete'])->name('blocklist.delete');
    Route::resource('time-slots', TimeSlotController::class);

    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);

    Route::resource('packages', \App\Http\Controllers\Admin\PackageController::class);

    Route::get('subscriptions',  [SubscriptionController::class, 'index'])->name('subscriptions');
    Route::get('/subscriptions/{subscription}', [SubscriptionController::class, 'show'])->name('subscriptions.show');
    Route::get('/subscriptions/{subscription}/changeStatus', [SubscriptionController::class, 'changeStatus'])->name('subscriptions.changeStatus');
    Route::delete('/subscriptions/{subscription}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');

    Route::get('appointments',  function (){
        $appointments = DB::table('appointments')->get();

        return view('admin.appointments.index', compact('appointments'));
    })->name('appointments');

    Route::get('newsletters',  function (){
        $newsletters = DB::table('newsletters')->get();

        return view('admin.newsletters.index', compact('newsletters'));
    })->name('newsletters');

    Route::get('estimates',  function (){
        $estimates = DB::table('estimates')->get();

        return view('admin.estimates.index', compact('estimates'));
    })->name('estimates');

    Route::resource('bookings', BookingController::class);
    Route::get('bookings-history', [BookingController::class, 'history'])->name('bookings.history');
    Route::get('bookings/{booking}/changeStatus', [BookingController::class, 'changeStatus'])->name('bookings.changeStatus');
    Route::get('bookings/{booking}/deleted', [BookingController::class, 'deleted'])->name('bookings.deleted');
    Route::get('bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
    Route::get('guest-bookings', [BookingController::class, 'guestBookings'])->name('guest_bookings');
    Route::get('guest-bookings/{booking}', [BookingController::class, 'guestBookingsShow'])->name('guest_bookings.show');

    Route::resource('users', UserController::class);
    Route::get('settings', [\App\Http\Controllers\UserController::class, 'editAdmin'])->name('settings');
    Route::put('settings', [\App\Http\Controllers\UserController::class, 'update'])->name('settings.update');

    Route::get('contacts', [\App\Http\Controllers\Admin\ContactUsController::class, 'index'])->name('contacts');
    Route::delete('contacts/{contactus}', [\App\Http\Controllers\Admin\ContactUsController::class, 'destroy'])->name('contacts.destroy');
    Route::delete('estimates/{estimate}', function (\App\Models\Estimate $estimate){
        $estimate->delete();

        return back()->with('success','Estimate deleted!');
    })->name('estimates.destroy');

    Route::delete('appointments/{appointment}', function (\App\Models\Appointment $appointment){
        $appointment->delete();

        return back()->with('success','Appointment deleted!');
    })->name('appointments.destroy');
});


//auth routes
Route::get('/dashboard', function (){
    $customers = User::whereHas('roles', function ($query) {
        $query->where('name', 'customer');
    })->count();

    $bookings = \App\Models\Booking::count();
    $finished_bookings = \App\Models\Booking::where('active',0)->count();
    $subscriptions = \App\Models\Subscription::count();
    return view('dashboard', compact('customers','bookings','finished_bookings','subscriptions'));
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
