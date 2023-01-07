@extends('layouts.backend')
@section('title', 'Edit Paket')
@section('content')
    <div class="mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    Edit Paket
                </div>
                <div>
                    <a href="{{ route('paket.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('paket.update', $paket->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Paket</label>
                        <input type="text" name="nama_paket" value="{{ $paket->nama_paket }}" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" id="" value="{{ $paket->harga }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        {{-- <input type="text" name="nama_paket" id="" class="form-control"> --}}
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{ $paket->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Isi Paket</label>
                        <textarea name="isi_paket" id="" cols="30" rows="10" class="form-control">{{ $paket->isi_paket }}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Foto Paket</label>
                        <img src="data:image/png;base64,{{ $paket->foto_paket }}" width="200" alt="">
                    </div> --}}
                    <div class="form-group mt-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection