<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Inventaris;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with(['alat', 'user'])->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $alat = Inventaris::all();
        $users = User::all();
        return view('peminjaman.create', compact('alat', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1',
            'tgl_peminjaman' => 'required|date',
            'kondisi_pinjam' => 'required|in:Baik,Rusak',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil ditambahkan.');
    }

    public function edit(Peminjaman $peminjaman)
    {
        $alat = Inventaris::all();
        $users = User::all();
        return view('peminjaman.edit', compact('peminjaman', 'alat', 'users'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1',
            'tgl_peminjaman' => 'required|date',
            'kondisi_pinjam' => 'required|in:Baik,Rusak',
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil diperbarui.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil dihapus.');
    }
}
