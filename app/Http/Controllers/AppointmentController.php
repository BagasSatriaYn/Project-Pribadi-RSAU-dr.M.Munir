<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Menampilkan daftar janji temu di Dashboard Admin
    public function index()
    {
        // Mengambil data terbaru (latest)
        $appointments = Appointment::latest()->get();
        
        // Mengirim data ke view dashboard.blade.php
        return view('dashboard', compact('appointments'));
    }

    // Menerima kiriman form dari halaman depan (Publik)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'department' => 'required',
            'doctor' => 'required',
            'message' => 'nullable',
        ]);

        Appointment::create($validated);

        return back()->with('success', 'Janji temu Anda telah berhasil dikirim!');
    }

    // Menghapus data janji temu (Admin)
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return back()->with('success', 'Data janji temu berhasil dihapus!');
    }
}