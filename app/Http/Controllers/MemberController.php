<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private array $members = [
        ['id' => 1, 'nama' => 'Siti Aminah', 'nim' => '2201001', 'email' => 'siti@kampus.ac.id', 'nomor_telepon' => '081234567890', 'alamat' => 'Jl. Merdeka No. 1', 'status' => 'aktif'],
        ['id' => 2, 'nama' => 'Budi Santoso', 'nim' => '2201002', 'email' => 'budi@kampus.ac.id', 'nomor_telepon' => '081234567891', 'alamat' => 'Jl. Sudirman No. 2', 'status' => 'aktif'],
        ['id' => 3, 'nama' => 'Rina Wijaya', 'nim' => '2201003', 'email' => 'rina@kampus.ac.id', 'nomor_telepon' => '081234567892', 'alamat' => 'Jl. Diponegoro No. 3', 'status' => 'nonaktif'],
    ];

    public function index()
    {
        $members = $this->members;

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}