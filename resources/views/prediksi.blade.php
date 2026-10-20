@extends('layouts.main')

@section('content')
    <h2 style="color: #1e7e34; border-bottom: 2px solid #28a745; padding-bottom: 10px;">Input Hasil Prediksi Mikroklimat</h2>
    
    <form action="{{ route('prediksi.store') }}" method="POST">
        @csrf
        
        <label>Lokasi Lahan:</label>
        <select name="lokasi" required>
            <option value="">-- Pilih Lokasi Lahan --</option>
            <option value="Garut Kota">Garut Kota</option>
            <option value="Tarogong Kaler">Tarogong Kaler</option>
            <option value="Samarang">Samarang</option>
        </select>

        <label>Nama Tanaman:</label>
        <input type="text" name="nama_tanaman" placeholder="Contoh: Padi, Jagung, Cabai" required>

        <label>Prediksi Suhu Udara (°C):</label>
        <input type="number" step="0.1" name="suhu_udara" placeholder="Contoh: 25.5" required>

        <label>Prediksi Kelembapan Udara (%):</label>
        <input type="number" name="kelembapan_udara" placeholder="Contoh: 60" required>

        <label>Prediksi Kelembapan Tanah (%):</label>
        <input type="number" name="kelembapan_tanah" placeholder="Contoh: 45" required>

        <button type="submit">Proses & Simpan Prediksi</button>
    </form>
@endsection