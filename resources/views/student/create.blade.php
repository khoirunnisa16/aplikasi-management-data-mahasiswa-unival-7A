@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nim" class="col-md-4 col-form-label text-md-end">{{ __('Nim') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control" name="nim">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tempat lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>
                        
                        {{-- <div class="row mb-3">
                            <label for="kelas" class="col-md-4 col-form-label text-md-end">{{ __('kelas') }}</label>

                            <div class="col-md-6">
                                <input id="kelas" type="text" class="form-control" name="kelas">
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('save') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
