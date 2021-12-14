@extends('layout.main')

@section('title', 'Tabel Absen')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')

        <div class="card">
            <div class="card-header d-flex">
              <h3 class="card-title">Daftar Absensi Pegawai</h3>
              <a href="/absen/add" class="ml-auto d-inline-block btn btn-info"> + Tambah Absensi</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="container-fluid">
                    <form action="/absen/cari" class="d-flex justify-content-between mb-4" method="GET">
                        <input type="text" class="form-control" name="cari" placeholder="Cari Nama Pegawai .." value="{{ old('cari') }}">
                        <button type="submit" class="btn btn-default d-inline"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
              <table id="example1" class="table table-bordered table-striped mb-4">
                <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($absen as $a)
                    <tr>

                        <td>{{ $a->pegawai_nama }}</td>
                        <td>{{ $a->Tanggal }}</td>
                        <td>{{ $a->Status }}</td>
                        <td>
                            <a href="/absen/view/{{ $a->ID }}" class="btn btn-info"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> View Detail</a>
                            |
                            <a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning"><i class="fa fa-wrench" aria-hidden="true"></i> Edit</a>
                            |
                            <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
              <div class="container-fluid">
                  {{ $absen->links() }}
              </div>

              <p class="pt-1">
                Keterangan Status: <br>
                H : Hadir <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
                </p>
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
