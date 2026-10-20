@extends('layouts.main')

@section('content')
    <h2 style="color: #1e7e34; border-bottom: 2px solid #28a745; padding-bottom: 10px;">Riwayat Prediksi Mikroklimat</h2>
    
    <table>
        <thead>
            <tr>
                <th>Waktu Input</th>
                <th>Lokasi</th>
                <th>Tanaman</th>
                <th>Suhu (°C)</th>
                <th>Udara (%)</th>
                <th>Tanah (%)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            {{-- Perulangan Menampilkan Data dari Database --}}
            @forelse($riwayats as $item)
                <tr>
                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>{{ $item->suhu_udara }}</td>
                    <td>{{ $item->kelembapan_udara }}</td>
                    <td>{{ $item->kelembapan_tanah }}</td>
                    <td>
                        @if($item->status_mikroklimat == 'Kering')
                            <span style="color: red; font-weight: bold;">{{ $item->status_mikroklimat }}</span>
                        @elseif($item->status_mikroklimat == 'Optimal')
                            <span style="color: green; font-weight: bold;">{{ $item->status_mikroklimat }}</span>
                        @else
                            <span style="color: blue; font-weight: bold;">{{ $item->status_mikroklimat }}</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center; color: #888;">Belum ada data riwayat prediksi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection