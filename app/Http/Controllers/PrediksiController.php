<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrediksiMikroklimat;

class PrediksiController extends Controller
{
    // Menampilkan halaman form input prediksi
    public function create() {
        return view('prediksi');
    }

    // Mengolah dan menyimpan data dari form
    public function prosesData(Request $request) {
        // 1. Tentukan Status & Rekomendasi berdasarkan kelembapan tanah
        $kelembapan = $request->kelembapan_tanah;
        $status = '';
        $rekomendasi = '';

        if ($kelembapan < 40) {
            $status = 'Kering';
            $rekomendasi = 'Segera lakukan penyiraman atau irigasi';
        } elseif ($kelembapan >= 40 && $kelembapan <= 70) {
            $status = 'Optimal';
            $rekomendasi = 'Pertahankan pola perawatan saat ini';
        } else {
            $status = 'Terlalu Lembap';
            $rekomendasi = 'Kurangi penyiraman dan periksa drainase';
        }

        // 2. Simpan ke database
        $prediksi = PrediksiMikroklimat::create([
            'lokasi' => $request->lokasi,
            'nama_tanaman' => $request->nama_tanaman,
            'suhu_udara' => $request->suhu_udara,
            'kelembapan_udara' => $request->kelembapan_udara,
            'kelembapan_tanah' => $request->kelembapan_tanah,
            'status_mikroklimat' => $status
        ]);

        // 3. Tampilkan hasil di halaman hasil.blade.php
        return view('hasil', compact('prediksi', 'rekomendasi'));
    }

    // Menampilkan riwayat dari database
    public function riwayat() {
        // Mengambil semua data dari yang terbaru
        $riwayats = PrediksiMikroklimat::latest()->get(); 
        return view('riwayat', compact('riwayats'));
    }
}