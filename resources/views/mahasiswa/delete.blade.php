@extends('layouts.app')

@section('content')
<h4>Konfirmasi Hapus</h4>
<div class="alert alert-danger">
    <p>Yakin ingin menghapus data berikut?</p>
</div>
<div class="card mb-3">
    <div class="card-body">
        <p><strong>NIM:</strong> {{ $mahasiswa->NIM }}</p>
        <p><strong>Nama:</strong> {{ $mahasiswa->Nama }}</p>
        <p><strong>Prodi:</strong> {{ $mahasiswa->Prodi }}</p>
        <p><strong>Status:</strong> {{ $mahasiswa->Status }}</p>
    </div>
</div>
<form method="POST" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i> Hapus
    </button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection