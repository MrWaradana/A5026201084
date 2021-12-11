@extends('layout.main')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')

    <div class="card">
        <div class="card-header d-flex">
            <h3 class="card-title">Tabel Pegawai</h3>
            <a href="/pegawai/tambah" class="ml-auto d-inline-block btn btn-info"> + Tambah Pegawai Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container-fluid">
                <form action="/pegawai/cari" class="d-flex justify-content-between mb-4" method="GET">
                    <input type="text" class="form-control" name="cari"
                        placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-default" value="CARI">
                </form>
            </div>
            <table id="example1" class="table table-bordered table-striped mb-4">
                <thead>
                    <tr>
                        <th>Nama</th>
                        {{-- <th>Jabatan</th> --}}
                        {{-- <th>Umur</th> --}}
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $p->pegawai_nama }}</td>
                            {{-- <td>{{ $p->pegawai_jabatan }}</td> --}}
                            {{-- <td>{{ $p->pegawai_umur }}</td> --}}
                            <td>{{ $p->pegawai_alamat }}</td>
                            <td>
                                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-info"><i
                                        class="fa fa-exclamation-circle" aria-hidden="true"></i> View Detail</a>
                                |
                                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning"><i
                                        class="fa fa-wrench" aria-hidden="true"></i> Edit</a>
                                |
                                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger"><i
                                        class="fa fa-times" aria-hidden="true"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        {{-- <th>Jabatan</th> --}}
                        {{-- <th>Umur</th> --}}
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
            <div class="container-fluid">
                {{ $pegawai->links() }}
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

{{-- @section('script')
    <script type="text/javascript">
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection --}}
