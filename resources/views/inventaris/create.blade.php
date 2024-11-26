@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Tambah Inventaris</h1>
    <form action="{{ route('inventaris.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_alat" class="form-label">Nama Alat</label>
            <input type="text" class="form-control" name="nama_alat" required>
        </div>
        <div class="mb-3">
            <label for="no_inventaris" class="form-label">No Inventaris</label>
            <input type="text" class="form-control" name="no_inventaris" required>
        </div>
        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi</label>
            <textarea class="form-control" name="spesifikasi"></textarea>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" required>
        </div>
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi</label>
            <select class="form-select" name="kondisi" required>
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('inventaris.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
