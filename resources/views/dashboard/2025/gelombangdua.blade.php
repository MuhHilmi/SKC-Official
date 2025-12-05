@extends('layout.app')

@section('title', 'Daftar Siswa')

@section('content')

    <!-- Main content -->
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h1>Daftar Siswa Gel 2</h1>
                            <table id="example1" class="table table-bordered table-striped" style="white-space: nowrap;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jurusan 1</th>
                                        <th>Jurusan 2</th>
                                        <th>NISN</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Asal Sekolah</th>
                                        <th>Nama Orang Tua / Wali</th>
                                        <th>Nomor HP/WA</th>
                                        <th>Rekomendasi</th>
                                        <th>Waktu Daftar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gelombangdua as $items)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                                            <td>{{ $items->nama }}</td>
                                            <td>{{ $items->jurusan }}</td>
                                            <td>{{ $items->jurusan_2 }}</td>
                                            <td>{{ $items->nisn }}</td>
                                            <td>{{ $items->tempat_lahir }}</td>
                                            <td>{{ $items->tanggal_lahir }}</td>
                                            <td>{{ $items->alamat }}</td>
                                            <td>{{ $items->kelamin }}</td>
                                            <td>{{ $items->sekolahAsal }}</td>
                                            <td>{{ $items->nmorngtuawali }}</td>
                                            <td>{{ $items->nmrkonfirmasi }}</td>
                                            <td>{{ $items->rekomendasi }}</td>
                                            <td>{{ $items->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
