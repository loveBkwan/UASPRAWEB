<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $query = Dosen::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                  ->orWhere('nidn', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('telepon', 'like', "%$search%")
                  ->orWhere('jabatan', 'like', "%$search%") ;
            });
        }
        $dosens = $query->latest()->get();
        return view('dosens.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosens',
            'email' => 'required|email|unique:dosens',
            'telepon' => 'nullable',
            'jabatan' => 'required',
        ]);
        Dosen::create($request->all());
        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosens,nidn,'.$dosen->id,
            'email' => 'required|email|unique:dosens,email,'.$dosen->id,
            'telepon' => 'nullable',
            'jabatan' => 'required',
        ]);
        $dosen->update($request->all());
        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil diupdate');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil dihapus');
    }

    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }
} 