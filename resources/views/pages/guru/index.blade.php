@extends('layouts.app', ['title' => 'Data Warga'])

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('library/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('library/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Akun Warga</h1>
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
                                <h4>Data Guru Honorer</h4>
                                <a href="{{ route('guru.tambah') }}" class="btn btn-success mt-4 p-2">+ Tambah
                                    Guru</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No HP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>POS</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $i => $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->tempat_lahir }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($item->tgl_lahir)->format('d-m-Y H:i') }}</td>
                                                    <td>{{ $item->no_hp }}</td>
                                                    <td>{{ $item->jkl == 'l' ? 'Laki-laki' : 'Perempuan' }}</td>
                                                    <td>{{ ucfirst($item->agama) }}</td>
                                                    <td>{{ $item->pos->nama ?? $item->id_pos }}</td>
                                                    <td>{{ ucfirst($item->status) }}</td>
                                                    <td>
                                                        <a href="{{ route('guru.edit', $item->id) }}"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <button onclick="deleteData({{ $item->id }}, 'guru')"
                                                            class="btn btn-danger btn-sm">Hapus</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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