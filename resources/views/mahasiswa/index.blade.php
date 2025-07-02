@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Data Mahasiswa</h4>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Tambah Data
    </a>
</div>

<div class="table-responsive">
    <table id="mahasiswaTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Status</th>
                <th class="aksi-column">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->NIM }}</td>
                <td>{{ $mhs->Nama }}</td>
                <td>{{ $mhs->Prodi }}</td>
                <td>{{ $mhs->Email }}</td>
                <td>
                    <span class="badge bg-{{ $mhs->Status == 'Aktif' ? 'primary' : ($mhs->Status == 'Lulus' ? 'success' : 'secondary') }}">
                        {{ $mhs->Status }}
                    </span>
                </td>
                <td class="aksi-column">
                    <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-info btn-sm" title="Lihat">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm" title="Hapus">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#mahasiswaTable').DataTable({
            responsive: true,
            lengthMenu: [ [5, 10, 50, 100], [5, 10, 50, 100] ]
        });
    });
</script>
@endpush
