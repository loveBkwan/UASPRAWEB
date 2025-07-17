<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        $query = Staff::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                  ->orWhere('nip', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('telepon', 'like', "%$search%")
                  ->orWhere('posisi', 'like', "%$search%") ;
            });
        }
        $staff = $query->latest()->get();
        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:staff',
            'email' => 'required|email|unique:staff',
            'telepon' => 'nullable',
            'posisi' => 'required',
        ]);
        Staff::create($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff berhasil ditambahkan');
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:staff,nip,'.$staff->id,
            'email' => 'required|email|unique:staff,email,'.$staff->id,
            'telepon' => 'nullable',
            'posisi' => 'required',
        ]);
        $staff->update($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff berhasil diupdate');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff berhasil dihapus');
    }

    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }
} 