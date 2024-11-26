@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Laboratorium</h1>
    <div class="mb-3">
        <a href="{{ route('jurnal_laboratorium.create') }}" class="btn btn-primary">Tambah Data</a>
        <button onclick="printTable()" class="btn btn-secondary">Cetak</button>
    </div>
    <table class="table table-striped" id="laboratoriumTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Mapel</th>
                <th>Kelas</th>
                <th>Guru</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurnalLaboratorium as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->mapel }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->guru }}</td>
                <td>
                    <a href="{{ route('jurnal_laboratorium.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('jurnal_laboratorium.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
        // Simpan elemen yang ingin disembunyikan saat mencetak
        let actionButtons = document.querySelectorAll('.btn');
        actionButtons.forEach(button => button.style.display = 'none');

        // Cetak halaman
        window.print();

        // Tampilkan kembali elemen setelah mencetak
        actionButtons.forEach(button => button.style.display = '');
    }
</script>

<style>
    @media print {
        /* Sembunyikan tombol dan elemen yang tidak diperlukan saat mencetak */
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
