@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Kerusakan Alat</h1>
    <div class="mb-3">
        <a href="{{ route('kerusakan_alat.create') }}" class="btn btn-primary">Tambah Data Kerusakan</a>
        <button onclick="printTable()" class="btn btn-secondary">Cetak</button>
    </div>
    <table class="table table-striped" id="kerusakanAlatTable">
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
                    <a href="{{ route('kerusakan_alat.edit', $kerusakan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kerusakan_alat.destroy', $kerusakan->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function printTable() {
        let actionButtons = document.querySelectorAll('.btn');
        actionButtons.forEach(button => button.style.display = 'none');
        window.print();
        actionButtons.forEach(button => button.style.display = '');
    }
</script>

<style>
    @media print {
        .btn, h1, .mb-3 {
            display: none !important;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    }
</style>
@endsection
