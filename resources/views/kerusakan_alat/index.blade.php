@extends('layouts.admin_master')

@section('content')
    <h1>Daftar Kerusakan Alat</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('kerusakan_alat.create') }}" class="btn btn-primary">Tambah Kerusakan Alat</a>
    <table class="table table-striped" id="alatTable">
        <thead>
            <tr>
                <th>ID Alat</th>
                <th>Spesifikasi</th>
                <th>Kerusakan</th>
                <th>Tanggal Kerusakan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kerusakanAlat as $kerusakan)
                <tr>
                    <td>{{ $kerusakan->id_alat }}</td>
                    <td>{{ $kerusakan->spesifikasi }}</td>
                    <td>{{ $kerusakan->kerusakan }}</td>
                    <td>{{ $kerusakan->tgl_kerusakan }}</td>
                    <td>{{ $kerusakan->keterangan }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('kerusakan_alat.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('inventaris.destroy', $item->id) }}" method="POST" style="display:inline;">
                        <form action="{{ route('kerusakan_alat.destroy', $kerusakan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
