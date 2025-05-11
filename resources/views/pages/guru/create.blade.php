@extends('layouts.app', ['title' => 'Data Warga'])

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('library/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('library/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Warga</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">DataTables</div>
                </div>
            </div>

            <div class="section-body">


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Data Warga </h4>

                            </div>

                            <div class="card-body">
                                <form action="{{ route('guru.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>POS</label>
                                                <input type="number" name="id_pos" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="datetime-local" name="tgl_lahir" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>No HP</label>
                                                <input type="text" name="no_hp" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="jkl" class="form-control" required>
                                                    <option value="l">Laki-Laki</option>
                                                    <option value="p">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <select name="agama" class="form-control" required>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="budha">Budha</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Status bersifat default "honorer", tidak perlu input manual --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-success mt-4 p-2">Simpan Guru
                                                Honorer</button>
                                        </div>
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
        <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('library/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('library/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
    @endpush
@endsection