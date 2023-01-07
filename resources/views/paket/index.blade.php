@extends('layouts.backend')
@section('title', 'Daftar Paket')
@section('content')
    <div class="mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    Daftar Paket
                </div>
                @if (Auth::user()->role == 'admin')
                <div>
                    <a href="{{ route('paket.create') }}" class="btn btn-primary">Buat Paket</a>
                </div>
                @endif
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pakets as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_paket }}</td>
                                <td>@currency($item->harga)</td>
                                <td class="d-flex">
                                    @if (Auth::user()->role == 'admin')
                                        <div>
                                            <a href="{{ route('paket.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('paket.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger ml-2">Hapus</button>
                                            </form>
                                        </div>
                                    @else
                                        <div>
                                            <a href="{{ route('transaksi.show', $item->id) }}" class="btn btn-info">Pesan</a>
                                        </div>
                                    @endif
                                    <div>
                                        <a href="{{ route('paket.show', $item->id) }}" class="btn btn-success ml-2">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>Belum Ada Data</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection