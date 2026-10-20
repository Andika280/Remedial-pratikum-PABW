@extends('layouts.main')

@section('content')
    <h2 style="color: #1e7e34; border-bottom: 2px solid #28a745; padding-bottom: 10px;">Hasil Analisis & Rekomendasi</h2>
    
    <table>
        <tr>
            <th style="width: 40%;">Lokasi Lahan</th>
            <td>{{ $prediksi->lokasi }}</td>
        </tr>
        <tr>
            <th>Nama Tanaman</th>
            <td>{{ $prediksi->nama_tanaman }}</td>
        </tr>
        <tr>
            <th>Suhu Udara</th>
            <td>{{ $prediksi->suhu_udara }} °C</td>
        </tr>
        <tr>
            <th>Kelembapan Udara</th>
            <td>{{ $prediksi->kelembapan_udara }} %</td>
        </tr>
        <tr>
            <th>Kelembapan Tanah</th>
            <td>{{ $prediksi->kelembapan_tanah }} %</td>
        </tr>
        <tr>
            <th>Status Mikroklimat</th>
            <td>
                @if($prediksi->status_mikroklimat == 'Kering')
                    <strong style="color: red; font-size: 1.2em;">{{ $prediksi->status_mikroklimat }}</strong>
                @elseif($prediksi->status_mikroklimat == 'Optimal')
                    <strong style="color: green; font-size: 1.2em;">{{ $prediksi->status_mikroklimat }}</strong>
                @else
                    <strong style="color: blue; font-size: 1.2em;">{{ $prediksi->status_mikroklimat }}</strong>
                @endif
            </td>
        </tr>
        <tr>
            <th>Rekomendasi Perawatan</th>
            <td><strong>{{ $rekomendasi }}</strong></td>
        </tr>
    </table>

    <br>
    <a href="{{ route('prediksi.riwayat') }}">
        <button type="button" style="background-color: #007bff;">Lihat Riwayat Prediksi</button>
    </a>
@endsection