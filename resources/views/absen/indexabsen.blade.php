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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>IDPegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($absen as $a)
                    <tr>

                        <td>{{ $a->IDPegawai }}</td>
                        <td>{{ $a->Tanggal }}</td>
                        <td>{{ $a->Status }}</td>
                        <td>
                            <a href="/absen/edit/{{ $a->ID }}" class="btn btn-info">Edit Absensi</a>
                            |
                            <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-info">Delete Absensi</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>IDPegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
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

 @section('script')
 <script type="text/javascript">
     $(function () {
         $("#example1").DataTable({
             "responsive": true, "lengthChange": false, "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     });
 </script>
@endsection
