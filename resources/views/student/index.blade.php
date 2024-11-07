@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="mb-3 text-end">
                        <a href="{{ route('student.create') }}" class="btn btn-success">Create</a>
                    </div>
                    <!-- Tambahkan SweetAlert2 CDN -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Menentukan nomor awal berdasarkan halaman saat ini
                                $no = ($students->currentPage() - 1) * $students->perPage() + 1;
                            @endphp
                            @foreach ($students as $s)
                                <tr>
                                    <td>{{ $no++ }}</td> <!-- Nomor akan bertambah satu setiap baris -->
                                    <td>{{ $s->nim }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->tempat_lahir }}</td>
                                    <td>{{ $s->tanggal_lahir }}</td>
                                    <td>
                                        <a href="{{ route('student.show', $s->id) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('student.edit', $s->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                        <!-- Form Hapus -->
                                        <form id="delete-form-{{ $s->id }}" action="{{ route('student.destroy', $s->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(event, {{ $s->id }})">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script SweetAlert -->
<script>
    function confirmDelete(event, studentId) {
        event.preventDefault(); // Prevent submit default dari button

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + studentId).submit();
            }
        });
    }
</script>
@endsection
