<?php

use App\Http\Livewire\AboutUs;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Redirect;
use App\Http\Livewire\ViewCars;
use App\Http\Livewire\FrontPage;
use App\Http\Livewire\Inventory;
use App\Http\Livewire\TestDrive;
use App\Http\Livewire\BecomeSeller;
use App\Http\Livewire\Admin\CarBrand;
use App\Http\Livewire\Admin\CarModel;
use App\Http\Livewire\Seller\EditCar;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InventorySingle;
use App\Http\Livewire\Seller\SellCars;
use App\Http\Livewire\Admin\AdminProfile;
use App\Http\Livewire\Admin\ViewCarBrand;
use App\Http\Livewire\Admin\ViewCarModel;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Seller\SellerProfile;
use App\Http\Livewire\Seller\UpdateVehicle;
use App\Http\Livewire\Seller\ViewSellerCars;
use App\Http\Livewire\Seller\SellerDashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// }); 
Route::get('/', FrontPage::class )->name('home');
Route::get('/redirect', Redirect::class )->name('redirect');
Route::get('/aboutus', AboutUs::class )->name('aboutus');
Route::get('/profile', Profile::class )->name('profile');
Route::get('/Inventory', Inventory::class )->name('Inventory');
Route::get('/InventorySingle/{code}', InventorySingle::class )->name('InventorySingle');
Route::get('/becomeSeller', BecomeSeller::class )->name('becomeSeller');
Route::get('/contact', Contact::class )->name('contact');
Route::get('/test-Drive', TestDrive::class )->name('test-Drive');



//Admin Route
Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->group(function() {
    Route::get('/admin-dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/AdminProfile', AdminProfile::class )->name('AdminProfile');
    Route::get('/CarBrand', CarBrand::class )->name('CarBrand');
    Route::get('/CarModel', CarModel::class )->name('CarModel');
    Route::get('/ViewCarBrand', ViewCarBrand::class )->name('ViewCarBrand');
    Route::get('/ViewCarModel', ViewCarModel::class )->name('ViewCarModel');


});

//User Route
Route::middleware(['auth:sanctum', 'verified', 'isUser'])->group(function() {
    Route::get('/base-dashboard', UserDashboard::class)->name('base.dashboard');
});

//Seller Route
Route::middleware(['auth:sanctum', 'verified', 'isSeller'])->group(function() {
    Route::get('/seller-dashboard', SellerDashboard::class)->name('seller.dashboard');
    Route::get('/editcar/{code}', EditCar::class)->name('seller.editcar');
    Route::get('/SellCars', SellCars::class )->name('SellCars');
    Route::get('/ViewCars', ViewCars::class )->name('ViewCars');
    Route::get('/SellerProfile', SellerProfile::class )->name('SellerProfile');
    Route::get('/ViewSellerCars', ViewSellerCars::class )->name('ViewSellerCars');
    Route::get('/updateVehicle\{code}', UpdateVehicle::class )->name('seller.update');

});


Route::middleware([
'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
