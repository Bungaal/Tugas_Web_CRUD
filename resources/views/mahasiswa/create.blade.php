@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input type="text" class="form-control" name="NIM" value="{{ old('NIM') }}">
            @error('NIM')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama" value="{{ old('Nama') }}">
            @error('Nama')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" name="Prodi" value="{{ old('Prodi') }}">
            @error('Prodi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="Email" value="{{ old('Email') }}">
            @error('Email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Status" class="form-label">Status</label>
            <select name="Status" class="form-control">
                <option value="Aktif">Aktif</option>
                <option value="Lulus">Lulus</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
            @error('Status')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection