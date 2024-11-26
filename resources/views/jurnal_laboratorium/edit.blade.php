@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Data Laboratorium</h1>
    <form action="{{ route('jurnal_laboratorium.update', $jurnalLaboratorium->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="hari">Hari</label>
            <select id="hari" name="hari" class="form-control" required>
                @php
                    $days = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
                @endphp
                @foreach($days as $day)
                    <option value="{{ $day }}" {{ $jurnalLaboratorium->hari == $day ? 'selected' : '' }}>
                        {{ $day }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal</label>
            <input type="date" id="tgl" name="tgl" class="form-control" value="{{ $jurnalLaboratorium->tgl }}" required>
        </div>
        <div class="form-group">
            <label for="mapel">Mapel</label>
            <input type="text" id="mapel" name="mapel" class="form-control" value="{{ $jurnalLaboratorium->mapel }}" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select id="kelas" name="kelas" class="form-control" required>
                <option value="" class="kelas-header" disabled>KELAS X</option>
                <option value="X-RPL" {{ $jurnalLaboratorium->kelas == 'X-RPL' ? 'selected' : '' }}>X-RPL</option>
                <option value="X-DKV 1" {{ $jurnalLaboratorium->kelas == 'X-DKV 1' ? 'selected' : '' }}>X-DKV 1</option>
                <option value="X-DKV 2" {{ $jurnalLaboratorium->kelas == 'X-DKV 2' ? 'selected' : '' }}>X-DKV 2</option>
                <option value="X-KULINER" {{ $jurnalLaboratorium->kelas == 'X-KULINER' ? 'selected' : '' }}>X-KULINER</option>
                <option value="X-TP" {{ $jurnalLaboratorium->kelas == 'X-TP' ? 'selected' : '' }}>X-TP</option>
                <option value="X-TKP" {{ $jurnalLaboratorium->kelas == 'X-TKP' ? 'selected' : '' }}>X-TKP</option>
                <option value="" class="kelas-header" disabled>KELAS XI</option>
                <option value="XI-RPL" {{ $jurnalLaboratorium->kelas == 'XI-RPL' ? 'selected' : '' }}>XI-RPL</option>
                <option value="XI-DKV 1" {{ $jurnalLaboratorium->kelas == 'XI-DKV 1' ? 'selected' : '' }}>XI-DKV 1</option>
                <option value="XI-DKV 2" {{ $jurnalLaboratorium->kelas == 'XI-DKV 2' ? 'selected' : '' }}>XI-DKV 2</option>
                <option value="XI-KULINER 1" {{ $jurnalLaboratorium->kelas == 'XI-KULINER 1' ? 'selected' : '' }}>XI-KULINER 1</option>
                <option value="XI-KULINER 2" {{ $jurnalLaboratorium->kelas == 'XI-KULINER 2' ? 'selected' : '' }}>XI-KULINER 2</option>
                <option value="XI-TP" {{ $jurnalLaboratorium->kelas == 'XI-TP' ? 'selected' : '' }}>XI-TP</option>
                <option value="XI-TKP" {{ $jurnalLaboratorium->kelas == 'XI-TKP' ? 'selected' : '' }}>XI-TKP</option>
                <option value="" class="kelas-header" disabled>KELAS XII</option>
                <option value="XII-RPL" {{ $jurnalLaboratorium->kelas == 'XII-RPL' ? 'selected' : '' }}>XII-RPL</option>
                <option value="XII-DKV 1" {{ $jurnalLaboratorium->kelas == 'XII-DKV 1' ? 'selected' : '' }}>XII-DKV 1</option>
                <option value="XII-DKV 2" {{ $jurnalLaboratorium->kelas == 'XII-DKV 2' ? 'selected' : '' }}>XII-DKV 2</option>
                <option value="XII-KULINER" {{ $jurnalLaboratorium->kelas == 'XII-KULINER' ? 'selected' : '' }}>XII-KULINER</option>
                <option value="XII-TP" {{ $jurnalLaboratorium->kelas == 'XII-TP' ? 'selected' : '' }}>XII-TP</option>
                <option value="XII-TKP" {{ $jurnalLaboratorium->kelas == 'XII-TKP' ? 'selected' : '' }}>XII-TKP</option>
            </select>
        </div>
        <div class="form-group">
            <label for="guru">Guru</label>
            <input type="text" id="guru" name="guru" class="form-control" value="{{ $jurnalLaboratorium->guru }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jurnal_laboratorium.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<style>
    .kelas-header {
        font-weight: bold;
        color: #888;
        background-color: #f9f9f9;
    }
</style>
@endsection
