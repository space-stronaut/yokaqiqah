@extends('layouts.backend')
@section('title', 'Daftar Transaksi')
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
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Paket</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Alamat Pengiriman</th>
                            <th>Status</th>
                            <th>Action</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksis as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->paket->nama_paket }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->user->no_telp }}</td>
                                <td>{{ $item->alamat_pengiriman }}</td>
                                {{-- <td class="d-flex">
                                    <div>
                                        <a href="{{ route('paket.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('paket.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                    <div>
                                        <a href="{{ route('transaksi.show', $item->id) }}" class="btn btn-info">Pesan</a>
                                    </div>
                                </td> --}}
                                <td>
                                    @if ($item->status === 'menunggu konfirmasi')
                                        <div class="badge bg-warning text-uppercase">{{ $item->status }}</div>
                                    @elseif($item->status === 'dikirim')
                                        <div class="badge bg-info text-uppercase">{{ $item->status }}</div>
                                    @else
                                        <div class="badge bg-success text-uppercase">{{ $item->status }}</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status === 'menunggu konfirmasi' && Auth::user()->role == 'admin')
                                        <form action="{{ route('transaksi.update', $item->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="status" value="dikirim">
                                            <button class="btn btn-info">Dikirim</button>
                                        </form>
                                    @elseif($item->status === 'dikirim' && Auth::user()->role == 'admin')
                                    <form action="{{ route('transaksi.update', $item->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="status" value="selesai">
                                        <button class="btn btn-success">Selesai</button>
                                    </form>
                                    @else
                                        
                                    @endif
                                    <a href="{{ route('transaksi.detail', $item->id) }}" class="btn btn-danger ml-2">Detail</a>
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