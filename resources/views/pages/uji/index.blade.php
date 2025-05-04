@extends('layouts.app', ['title' => 'Uji Method Saw'])

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('library/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('library/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Kriteria Studi Kasus</h4>
                                </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Kode
                                                </th>
                                                <th>Kriteria</th>
                                                <th>Keterangan</th>
                                                <th>Bobot</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($wr[0] as $i => $item)
                                                <tr>
                                                    <td class="text-center"> {{ ++$i }} </td>
                                                    <td>{{ $item->kriteria }}</td>
                                                    <td>{{ $item->ket }}</td>
                                                    <td>{{ $item->poin . " %" }}</td>
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

        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th>Nama</th>
                                            @foreach ($wr[0] as $i => $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($wr[1] as $x => $it)
                                                <tr>
                                                    <td class="text-center"> {{ ++$x }} </td>
                                                    <td>{{ $it->nama }}</td>
                                                    
                                                    <td></td>
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
