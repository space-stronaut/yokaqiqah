@extends('layouts.backend')
@section('title', 'Daftar User')
@section('content')
    <div class="mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    Daftar Usre
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
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Role</th>
                            <th>Action</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->role }}</td>
                                <td class="d-flex">
                                    <form action="{{ route('user.update', $item->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="role" value="{{ $item->role == 'user' ? 'admin' : 'user' }}">
                                        <button class="btn btn-success ml-2">Jadikan {{ $item->role == 'user' ? 'Admin' : 'User' }}</button>
                                    </form>
                                    <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        {{-- <input type="hidden" name="status" value="selesai"> --}}
                                        <button class="btn btn-danger ml-2">Hapus User</button>
                                    </form>
                                    {{-- <a href="{{ route('transaksi.detail', $item->id) }}" class="btn btn-danger ml-2">Detail</a> --}}
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