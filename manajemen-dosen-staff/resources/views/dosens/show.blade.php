@extends('layouts.app')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-header">
        <h5 class="mb-0">Detail Dosen</h5>
    </div>
    <div class="card-body">
        <dl class="row mb-0">
            <dt class="col-sm-4">Nama</dt>
            <dd class="col-sm-8">{{ $dosen->nama }}</dd>
            <dt class="col-sm-4">NIDN</dt>
            <dd class="col-sm-8">{{ $dosen->nidn }}</dd>
            <dt class="col-sm-4">Email</dt>
            <dd class="col-sm-8">{{ $dosen->email }}</dd>
            <dt class="col-sm-4">Telepon</dt>
            <dd class="col-sm-8">{{ $dosen->telepon }}</dd>
            <dt class="col-sm-4">Jabatan</dt>
            <dd class="col-sm-8">{{ $dosen->jabatan }}</dd>
        </dl>
        <a href="{{ route('dosens.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>
@endsection 