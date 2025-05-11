@extends('layouts.app', ['title' => 'Edit Warga'])
@section('content')
    @push('styles')
        <!-- Summernote CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">

    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Warga</h1>
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
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <form action="{{ route('guru.update', $data->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $data->id }}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input required type="text" name="nama" class="form-control"
                                                    value="{{ $data->nama }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input required type="text" name="alamat" class="form-control"
                                                    value="{{ $data->alamat }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>POS</label>
                                                <input required type="text" name="id_pos" class="form-control"
                                                    value="{{ $data->id_pos }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input required type="text" name="tempat_lahir" class="form-control"
                                                    value="{{ $data->tempat_lahir }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input required type="datetime-local" name="tgl_lahir" class="form-control"
                                                    value="{{ \Carbon\Carbon::parse($data->tgl_lahir)->format('Y-m-d\TH:i') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No HP</label>
                                                <input required type="text" name="no_hp" class="form-control"
                                                    value="{{ $data->no_hp }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="jkl" class="form-control" required>
                                                    <option value="l" {{ $data->jkl == 'l' ? 'selected' : '' }}>Laki-Laki
                                                    </option>
                                                    <option value="p" {{ $data->jkl == 'p' ? 'selected' : '' }}>Perempuan
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select name="agama" class="form-control" required>
                                                    <option value="islam" {{ $data->agama == 'islam' ? 'selected' : '' }}>
                                                        Islam</option>
                                                    <option value="kristen" {{ $data->agama == 'kristen' ? 'selected' : '' }}>
                                                        Kristen</option>
                                                    <option value="katolik" {{ $data->agama == 'katolik' ? 'selected' : '' }}>
                                                        Katolik</option>
                                                    <option value="budha" {{ $data->agama == 'budha' ? 'selected' : '' }}>
                                                        Budha</option>
                                                    <option value="hindu" {{ $data->agama == 'hindu' ? 'selected' : '' }}>
                                                        Hindu</option>
                                                    <option value="konghucu" {{ $data->agama == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input required type="text" name="status" class="form-control"
                                                    value="{{ $data->status }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-primary">Update Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <hr>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ route('guru.index') }}" class="btn btn-warning">Kembali</a>
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