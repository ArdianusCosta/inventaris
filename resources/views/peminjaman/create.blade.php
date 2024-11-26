@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Tambah Peminjaman</h1>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_alat" class="form-label">Nama Alat</label>
            <select name="id_alat" id="id_alat" class="form-control">
                @foreach ($alat as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">Nama Peminjam</label>
            <select name="id_peminjaman" id="id_peminjaman" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control">
        </div>
        <div class="mb-3">
            <label for="kondisi_pinjam" class="form-label">Kondisi Pinjam</label>
            <select name="kondisi_pinjam" id="kondisi_pinjam" class="form-control">
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
