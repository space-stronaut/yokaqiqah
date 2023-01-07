@extends('layouts.backend')

@section('title')
    Detail Paket
@endsection

@section('content')
<div class="mt-5">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                Detail Paket
            </div>
            {{-- <div>
                <a href="{{ route('paket.create') }}" class="btn btn-primary">Buat Paket</a>
            </div> --}}
        </div>
        <div class="card-body">
            <table style="width: 100%">
                <tr>
                    <th>Nama Paket</th>
                    <td>:</td>
                    <td>{{ $paket->nama_paket }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>:</td>
                    <td>{{ $paket->deskripsi }}</td>
                </tr>
                <tr>
                    <th>Isi Paket</th>
                    <td>:</td>
                    <td>{{ $paket->isi_paket }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td>@currency($paket->harga)</td>
                </tr>
                <tr>
                    <th>Foto Paket</th>
                    <td>:</td>
                    <td><img src="data:image/png;base64,{{ $paket->foto_paket }}" alt="" width="500"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection