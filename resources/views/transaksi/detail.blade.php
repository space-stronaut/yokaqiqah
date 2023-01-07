@extends('layouts.backend')

@section('title')
    Detail Transaksi
@endsection

@section('content')
<div class="mt-5">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                Daftar Transaksi
            </div>
            {{-- <div>
                <a href="{{ route('paket.create') }}" class="btn btn-primary">Buat Paket</a>
            </div> --}}
        </div>
        <div class="card-body">
            <table style="width: 100%">
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>{{ $transaksi->user->name }}</td>
                </tr>
                <tr>
                    <th>Paket</th>
                    <td>:</td>
                    <td>{{ $transaksi->paket->nama_paket }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>{{ $transaksi->user->email }}</td>
                </tr>
                <tr>
                    <th>No Telp</th>
                    <td>:</td>
                    <td>{{ $transaksi->user->no_telp }}</td>
                </tr>
                <tr>
                    <th>Alamat Pengiriman</th>
                    <td>:</td>
                    <td>{{ $transaksi->alamat_pengiriman }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td>{{ $transaksi->status }}</td>
                </tr>
                <tr>
                    <th>Bukti Transaksi</th>
                    <td>:</td>
                    <td><img src="data:image/png;base64,{{ $transaksi->bukti_transaksi }}" alt="" width="500"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection