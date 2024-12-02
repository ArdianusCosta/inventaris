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
            <input type="text" name="spesifikasi" class="form-control" required>
        </div>
        <div>
            <label>Kerusakan:</label>
            <input type="text" name="kerusakan" class="form-control" required>
        </div>
        <div>
            <label>Tanggal Kerusakan:</label>
            <input type="date" id="tanggal_kerusakan" name="tanggal_kerusakan" class="form-control" required>
        </div>
        <div>
            <label>Keterangan:</label>
            <input type="text" name="keterangan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kerusakan_alat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    // Mengatur tanggal input ke tanggal hari ini
    const tanggalKerusakanInput = document.getElementById("tanggal_kerusakan");
    const todayDate = new Date().toISOString().split('T')[0]; // Format: YYYY-MM-DD
    tanggalKerusakanInput.value = todayDate;
</script>
@endsection
