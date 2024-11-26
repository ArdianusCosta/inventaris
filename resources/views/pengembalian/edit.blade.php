@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Tambah Pengembalian</h1>
    <form action="{{ route('pengembalian.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="number" class="form-control" id="id_alat" name="id_alat" required>
        </div>
        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
            <input type="number" class="form-control" id="id_peminjaman" name="id_peminjaman" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1">
        </div>
        <div class="mb-3">
            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
        </div>
        <div class="mb-3">
            <label for="kondisi_kembali" class="form-label">Kondisi Kembali</label>
            <select class="form-select" id="kondisi_kembali" name="kondisi_kembali" required>
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pengembalian.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
