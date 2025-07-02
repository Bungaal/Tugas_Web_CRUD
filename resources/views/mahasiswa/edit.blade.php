@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Mahasiswa</h3>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input type="text" class="form-control" name="NIM" value="{{ old('NIM', $mahasiswa->NIM) }}">
            @error('NIM')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama" value="{{ old('Nama', $mahasiswa->Nama) }}">
            @error('Nama')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" name="Prodi" value="{{ old('Prodi', $mahasiswa->Prodi) }}">
            @error('Prodi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="Email" value="{{ old('Email', $mahasiswa->Email) }}">
            @error('Email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="Status" class="form-label">Status</label>
            <select name="Status" class="form-control">
                <option {{ $mahasiswa->Status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option {{ $mahasiswa->Status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                <option {{ $mahasiswa->Status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
            @error('Status')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
