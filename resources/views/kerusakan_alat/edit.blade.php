@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Kerusakan Alat</h1>

        <form action="{{ route('kerusakan_alat.update', $kerusakanAlat->id) }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="id_alat">ID Alat:</label>
                <input
                    type="text"
                    id="id_alat"
                    name="id_alat"
                    class="form-control"
                    value="{{ $kerusakanAlat->id_alat }}"
                    required>
                <div class="invalid-feedback">ID Alat wajib diisi.</div>
            </div>

            <div class="form-group mb-3">
                <label for="spesifikasi">Spesifikasi:</label>
                <textarea
                    id="spesifikasi"
                    name="spesifikasi"
                    class="form-control"
                    rows="3">{{ $kerusakanAlat->spesifikasi }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="kerusakan">Kerusakan:</label>
                <textarea
                    id="kerusakan"
                    name="kerusakan"
                    class="form-control"
                    rows="3"
                    required>{{ $kerusakanAlat->kerusakan }}</textarea>
                <div class="invalid-feedback">Kerusakan wajib diisi.</div>
            </div>

            <div class="form-group mb-3">
                <label for="tgl_kerusakan">Tanggal Kerusakan:</label>
                <input
                    type="date"
                    id="tgl_kerusakan"
                    name="tgl_kerusakan"
                    class="form-control"
                    value="{{ $kerusakanAlat->tgl_kerusakan }}"
                    required>
                <div class="invalid-feedback">Tanggal Kerusakan wajib diisi.</div>
            </div>

            <div class="form-group mb-4">
                <label for="keterangan">Keterangan:</label>
                <textarea
                    id="keterangan"
                    name="keterangan"
                    class="form-control"
                    rows="3">{{ $kerusakanAlat->keterangan }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('kerusakan_alat.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script>
        // Bootstrap validation
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');

            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
@endsection
