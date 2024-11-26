@extends('layouts.admin_master')

@section('content')
    <h1>Tambah Kerusakan Alat</h1>

    <form action="{{ route('kerusakan_alat.store') }}" method="POST">
        @csrf
        <div>
            <label>ID Alat:</label>
            <input type="text" name="id_alat" class="form-control" required>
        </div>
        <div>
            <label>Spesifikasi:</label>
            <input type="text" name="Spesifikasi" class="form-control" required>
        </div>
        <div>
            <label>Kerusakan:</label>
            <input type="text" name="Kerusakan" class="form-control" required>
        </div>
        <div>
            <label>Tanggal Kerusakan:</label>
            <input type="date" name="Tanggal Kerusakan" class="form-control" required>
        </div>
        <div>
            <label>Keterangan:</label>
            <input type="text" name="Keterangan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kerusakan_alat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
