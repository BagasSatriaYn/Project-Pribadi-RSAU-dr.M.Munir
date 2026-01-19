<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    // Mengambil data dokter agar bisa tampil di section 'Doctors' di halaman depan
    $doctors = Doctor::all(); 
    return view('index', compact('doctors'));
});

// Route untuk menerima kiriman form janji temu dari pasien
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// ... (route superadmin)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard memanggil index untuk ambil data
    Route::get('/dashboard', [AppointmentController::class, 'index'])->name('dashboard');
    
    // Route untuk hapus
    Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});

/*
|--------------------------------------------------------------------------
| Superadmin Routes (Protected by Auth)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard sekarang memanggil fungsi index di AppointmentController
    Route::get('/dashboard', [AppointmentController::class, 'index'])->name('dashboard');

    // Route untuk menghapus data janji temu
    Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    // Profile Routes bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';