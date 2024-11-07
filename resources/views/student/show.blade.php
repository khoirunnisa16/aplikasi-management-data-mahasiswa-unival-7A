@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('student.index') }}" class="btn btn-info">Back to List</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $student->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>{{ $student->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $student->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>{{ $student->nim }}</td>
                        </tr>
                        {{-- <tr>
                            <th>Kelas</th>
                            <td>{{ $student->kelas }}</td>
                        </tr> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
