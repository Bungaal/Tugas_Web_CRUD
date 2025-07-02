@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Mahasiswa</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>NIM</th>
                    <td>{{ $mahasiswa->NIM }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $mahasiswa->Nama }}</td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>{{ $mahasiswa->Prodi }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $mahasiswa->Email }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge bg-{{ 
                            $mahasiswa->Status == 'Aktif' ? 'primary' : 
                            ($mahasiswa->Status == 'Lulus' ? 'success' : 'secondary') 
                        }}">
                            {{ $mahasiswa->Status }}
                        </span>
                    </td>
                </tr>
            </table>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
@endsection
