@extends('layouts.backend')
{{-- @extends('layouts.app') --}}
@section('title', 'Buat Transaksi - '.$paket->nama_paket)
@section('content')
    <div class="mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    Beli Paket - {{ $paket->nama_paket }} - @currency($paket->harga)
                </div>
                <div>
                    <a href="{{ route('paket.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="paket_id" value="{{ $paket->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="menunggu konfirmasi">
                    <div class="form-group">
                        <label for="">Nama Paket</label>
                        <input type="text" name="nama_paket" value="{{ $paket->nama_paket }}" id="" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Pengiriman</label>
                        {{-- <input type="number" name="harga" id="" class="form-control"> --}}
                        <textarea name="alamat_pengiriman" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Notes</label>
                        {{-- <input type="text" name="nama_paket" id="" class="form-control"> --}}
                        <textarea name="notes" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Bukti transaksi</label>
                        <input type="file" name="bukti_transaksi" id="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection