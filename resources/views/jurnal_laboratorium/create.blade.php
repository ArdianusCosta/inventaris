@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Tambah Data Laboratorium</h1>
    <form action="{{ route('jurnal_laboratorium.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="hari">Hari</label>
            <select id="hari" name="hari" class="form-control" required>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input type="date" id="tgl" name="tgl" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="mapel">Mapel</label>
            <input type="text" id="mapel" name="mapel" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select id="kelas" name="kelas" class="form-control" required>
                <option value="" class="kelas-header" disabled>KELAS X</option>
                <option value="X-RPL">X-RPL</option>
                <option value="X-DKV 1">X-DKV 1</option>
                <option value="X-DKV 2">X-DKV 2</option>
                <option value="X-KULINER">X-KULINER</option>
                <option value="X-TP">X-TP</option>
                <option value="X-TKP">X-TKP</option>
                <option value="" class="kelas-header" disabled>KELAS XI</option>
                <option value="XI-RPL">XI-RPL</option>
                <option value="XI-DKV 1">XI-DKV 1</option>
                <option value="XI-DKV 2">XI-DKV 2</option>
                <option value="XI-KULINER 1">XI-KULINER 1</option>
                <option value="XI-KULINER 2">XI-KULINER 2</option>
                <option value="XI-TP">XI-TP</option>
                <option value="XI-TKP">XI-TKP</option>
                <option value="" class="kelas-header" disabled>KELAS XII</option>
                <option value="XII-RPL">XII-RPL</option>
                <option value="XII-DKV 1">XII-DKV 1</option>
                <option value="XII-DKV 2">XII-DKV 2</option>
                <option value="XII-KULINER">XII-KULINER</option>
                <option value="XII-TP">XII-TP</option>
                <option value="XII-TKP">XII-TKP</option>
            </select>
        </div>

        <div class="form-group">
            <label for="guru">Guru</label>
            <input type="text" id="guru" name="guru" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jurnal_laboratorium.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
    
<script>
    // Mengatur dropdown hari ke hari saat ini
    const hariArray = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    const today = new Date();
    document.getElementById("hari").value = hariArray[today.getDay()];

    // Mengatur tanggal input ke tanggal hari ini
    const tanggalInput = document.getElementById("tgl");
    const todayDate = today.toISOString().split('T')[0]; // Format: YYYY-MM-DD
    tanggalInput.value = todayDate;
</script>

<style>
    /* Gaya khusus untuk opsi header */
    .kelas-header {
        font-weight: bold;
        color: #888; /* Abu-abu pudar */
        background-color: #f9f9f9; /* Warna latar belakang pudar */
    }
</style>
@endsection
