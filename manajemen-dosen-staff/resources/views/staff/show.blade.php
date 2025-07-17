@extends('layouts.app')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-header">
        <h5 class="mb-0">Detail Staff</h5>
    </div>
    <div class="card-body">
        <dl class="row mb-0">
            <dt class="col-sm-4">Nama</dt>
            <dd class="col-sm-8">{{ $staff->nama }}</dd>
            <dt class="col-sm-4">NIP</dt>
            <dd class="col-sm-8">{{ $staff->nip }}</dd>
            <dt class="col-sm-4">Email</dt>
            <dd class="col-sm-8">{{ $staff->email }}</dd>
            <dt class="col-sm-4">Telepon</dt>
            <dd class="col-sm-8">{{ $staff->telepon }}</dd>
            <dt class="col-sm-4">Posisi</dt>
            <dd class="col-sm-8">{{ $staff->posisi }}</dd>
        </dl>
        <a href="{{ route('staff.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>
@endsection 