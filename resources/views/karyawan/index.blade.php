@extends('layout.main')

@section('title', 'Tabel Karyawan')
@section('judulhalaman', 'Tabel Karyawan')

@section('konten')

    <div class="card">
        <div class="card-header d-flex">
            <h3 class="card-title">Tabel Karyawan</h3>
            <a href="/karyawan/tambah" class="ml-auto d-inline-block btn btn-info"> + Tambah Karyawan Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container-fluid">
                <form action="/karyawan/cari" class="d-flex justify-content-between mb-4" method="GET">
                    <input type="text" class="form-control" name="cari"
                        placeholder="Cari Karyawan berdasarkan nama atau pangkat .." value="{{ old('cari') }}">
                    <button type="submit" class="btn btn-default d-inline"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                </form>
            </div>
            <table id="example1" class="table table-bordered table-striped mb-4">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th>Gaji</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawan as $k)
                        <tr>
                            <td>{{ $k->NIP }}</td>
                            <td>{{ $k->Nama }}</td>
                            <td>{{ $k->Pangkat }}</td>
                            <td id="gaji">Rp. {{ number_format($k->Gaji,0,',','.') }}</td>
                            <td>
                                <a href="/karyawan/view/{{ $k->NIP }}" class="btn btn-info"><i
                                        class="fa fa-exclamation-circle" aria-hidden="true"></i> View Detail</a>
                                |
                                <a href="/karyawan/edit/{{ $k->NIP }}" class="btn btn-warning"><i
                                        class="fa fa-wrench" aria-hidden="true"></i> Edit</a>
                                |
                                <a href="/karyawan/hapus/{{ $k->NIP }}" class="btn btn-danger"><i
                                        class="fa fa-times" aria-hidden="true"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th>Gaji</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
            <div class="container-fluid">
                {{ $karyawan->links() }}
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

