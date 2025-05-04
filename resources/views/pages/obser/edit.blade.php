@extends('layouts.app', ['title' => 'Edit Observasi'])
@section('content')
    @push('styles')
        <!-- Summernote CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">

    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Observasi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Form</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('obser.update') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" class="id" value="{{ $data->id }}">
                                        <h2>Observasi</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>id_warga</label>
                                                    <input type="text"  name="id_warga" required value="{{ $data->id_warga }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Id Disabilitas</label>
                                                    <input required  type="text" name="id_disabilitas" class="form-control" value="{{ $data->id_disabilitas }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group ">
                                                <label>Skor</label>
                                                <input type="number" name="skor" class="form-control" required value="{{ $data->skor }}">
                                            </div>
                                        </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a href="{{ route('obser.index') }}" class="btn btn-warning" >Kembali</a>
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
        <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    @endpush
@endsection
