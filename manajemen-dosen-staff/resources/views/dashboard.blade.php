@extends('layouts.app')

@section('content')
<div class="row g-4">
    <div class="col-lg-6">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Dosen (5 Terbaru)</h5>
                <a href="{{ route('dosens.index') }}" class="btn btn-sm btn-primary">Lihat Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>NIDN</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Dosen::latest()->take(5)->get() as $dosen)
                            <tr>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->nidn }}</td>
                                <td>{{ $dosen->email }}</td>
                            </tr>
                            @endforeach
                            @if(\App\Models\Dosen::count() == 0)
                            <tr><td colspan="3" class="text-center">Belum ada data dosen.</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Staff (5 Terbaru)</h5>
                <a href="{{ route('staff.index') }}" class="btn btn-sm btn-primary">Lihat Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Staff::latest()->take(5)->get() as $staff)
                            <tr>
                                <td>{{ $staff->nama }}</td>
                                <td>{{ $staff->nip }}</td>
                                <td>{{ $staff->email }}</td>
                            </tr>
                            @endforeach
                            @if(\App\Models\Staff::count() == 0)
                            <tr><td colspan="3" class="text-center">Belum ada data staff.</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 