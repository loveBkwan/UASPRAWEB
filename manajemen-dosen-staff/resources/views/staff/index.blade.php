@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Staff</h5>
        <a href="{{ route('staff.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i> Tambah Staff</a>
    </div>
    <div class="card-body">
        <form method="GET" action="{{ route('staff.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari staff...">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i> Cari</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Posisi</th>
                        <th style="width:120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staff as $s)
                    <tr>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->nip }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->telepon }}</td>
                        <td>{{ $s->posisi }}</td>
                        <td>
                            <a href="{{ route('staff.show', $s) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('staff.edit', $s) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('staff.destroy', $s) }}" method="POST" style="display:inline;">
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