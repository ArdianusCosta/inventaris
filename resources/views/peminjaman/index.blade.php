@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Data Peminjaman</h1>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Alat</th>
                <th>Nama Peminjam</th>
                <th>Jumlah</th>
                <th>Tanggal Peminjaman</th>
                <th>Kondisi Pinjam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->alat->name }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->tgl_peminjaman }}</td>
                    <td>{{ $item->kondisi_pinjam }}</td>
                    <td>
                        <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
