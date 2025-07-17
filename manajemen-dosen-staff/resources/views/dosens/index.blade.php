@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Dosen</h5>
        <a href="{{ route('dosens.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i> Tambah Dosen</a>
    </div>
    <div class="card-body">
        <form method="GET" action="{{ route('dosens.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari dosen...">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i> Cari</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Jabatan</th>
                        <th style="width:120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dosens as $dosen)
                    <tr>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->nidn }}</td>
                        <td>{{ $dosen->email }}</td>
                        <td>{{ $dosen->telepon }}</td>
                        <td>{{ $dosen->jabatan }}</td>
                        <td>
                            <a href="{{ route('dosens.show', $dosen) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('dosens.edit', $dosen) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('dosens.destroy', $dosen) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 