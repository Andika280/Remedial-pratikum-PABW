@extends('layouts.main')

@section('content')
    <h2 style="color: #1e7e34; border-bottom: 2px solid #28a745; padding-bottom: 10px;">Tentang Sistem AgroClima Garut</h2>
    
    <p><strong>Tujuan:</strong> Membantu petani memantau tren perubahan mikroklimat dan kebutuhan penyiraman secara teratur.</p>
    
    <p><strong>Lokasi Pemantauan:</strong></p>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>
    
    <p><strong>Parameter Mikroklimat:</strong> Suhu udara, Kelembapan udara, dan Kelembapan tanah.</p>
    <p><strong>Model Prediksi:</strong> Long Short-Term Memory (LSTM) berbasis Deep Learning.</p>
@endsection