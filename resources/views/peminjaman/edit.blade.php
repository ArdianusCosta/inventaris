@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Data Peminjaman</h1>
    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_alat" class="form-label">Nama Alat</label>
            <select name="id_alat" id="id_alat" class="form-control">
                @foreach ($alat as $item)
                    <option value="{{ $item->id }}" {{ $peminjaman->id_alat == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">Nama Peminjam</label>
            <select name="id_peminjaman" id="id_peminjaman" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $peminjaman->id_peminjaman == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $peminjaman->jumlah }}">
        </div>
        <div class="mb-3">
            <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control" value="{{ $peminjaman->tgl_peminjaman }}">
        </div>
        <div class="mb-3">
            <label for="kondisi_pinjam" class="form-label">Kondisi Pinjam</label>
            <select name="kondisi_pinjam" id="kondisi_pinjam" class="form-control">
                <option value="Baik" {{ $peminjaman->kondisi_pinjam == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Rusak" {{ $peminjaman->kondisi_pinjam == 'Rusak' ? 'selected' : '' }}>Rusak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
