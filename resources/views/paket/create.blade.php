@extends('layouts.backend')
@section('title', 'Buat Paket')
@section('content')
    <div class="mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    Buat Paket
                </div>
                <div>
                    <a href="{{ route('paket.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('paket.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Paket</label>
                        <input type="text" name="nama_paket" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        {{-- <input type="text" name="nama_paket" id="" class="form-control"> --}}
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Isi Paket</label>
                        <textarea name="isi_paket" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Paket <small>*Optional</small></label>
                        <input type="file" name="foto_paket" id="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection