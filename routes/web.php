<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\productController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\sliderController;


//======= admin =======
// index
Route::get('/admin/dashboard', [homeController::class, 'dashboard'])->name('dashboard');

// ================ slider ==================
Route::get('/admin/slider', [sliderController::class, 'slider'])->name('sliderAdmin');
// insert about
Route::post('/admin/insert_slider', [sliderController::class, 'insert_slider'])->name('insert_slider');// delete slider 
Route::get('/sliderDelete/{id}', [sliderController::class, 'sliderDelete'])->name('sliderDelete');

// ============= about us ===================
Route::get('/admin/about', [aboutController::class, 'about'])->name('aboutAdmin');
// insert about
Route::post('/admin/insert_about', [aboutController::class, 'insert_about'])->name('insert_about');
// delete about 
Route::get('/aboutDelete/{id}', [aboutController::class, 'aboutDelete'])->name('aboutDelete');
// edit about
Route::get('/aboutEdit', [aboutController::class, 'aboutEdit'])->name('aboutEdit');


// ================= gallery ======================
Route::get('/admin/gallery', [galleryController::class, 'gallery'])->name('galleryAdmin');
// post insert image
Route::post('/admin/insert_image', [galleryController::class, 'insert_image'])->name('insert_image');
// deleteImage
Route::get('/deleteImage/{id}', [galleryController::class, 'deleteImage'])->name('deleteImage');


// ================== product =====================
Route::get('/admin/product', [productController::class, 'product'])->name('productAdmin');
// insert product
Route::post('/admin/insert_product', [productController::class, 'insert_product'])->name('insert_product');// delete about 
Route::get('/productDelete/{id}', [productController::class, 'productDelete'])->name('productDelete');


// client
Route::get('/admin/client', function(){
    return view('admin.clientAdmin');
})->name('clientAdmin');

// Messages From Clients
Route::get('/admin/message-from-client', function(){
    return view('admin.MessagesFromClients');
})->name('MessagesFromClients');

// service
Route::get('/admin/service', function(){
    return view('admin.serviceAdmin');
})->name('serviceAdmin');

// serviceEdit
Route::get('/admin/service-edit', function(){
    return view('admin.serviceEdit');
})->name('serviceEdit');

// productEdit
Route::get('/admin/product-edit', function(){
    return view('admin.productEdit');
})->name('productEdit');

// overview
Route::get('/admin/machine-overview', function(){
    return view('admin.overviewAdmin');
})->name('overviewAdmin');

// overviewEdit
Route::get('/admin/machine-overview-edit', function(){
    return view('admin.overviewEdit');
})->name('overviewEdit');





// ======== frontend =========
Route::get('/', function(){
    return view('index');
})->name('/');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/overview', function(){
    return view('overview');
})->name('overview');