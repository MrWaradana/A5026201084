@extends('layout.main')

@section('title', 'Tabel Tugas')

@section('judulhalaman', 'Tabel Tugas')

@section('konten')


    <div class="card">
        <div class="card-header d-flex">
          <h3 class="card-title">DataTable with default features</h3>
          <a href="/tugas/tambah" class="ml-auto d-inline-block"> + Tambah Tugas Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>IDPegawai</th>
                <th>Tanggal dan Waktu</th>
                <th>NamaTugas</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($tugas as $t)
                <tr>
                    <td>{{ $t->IDPegawai }}</td>
                    <td>{{ $t->Tanggal }}</td>
                    <td>{{ $t->NamaTugas }}</td>
                    <td>{{ $t->Status }}</td>
                    <td>
                        <a href="/tugas/edit/{{ $t->ID }}">Edit</a>
                        |
                        <a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>IDPegawai</th>
                <th>Tanggal dan Waktu</th>
                <th>NamaTugas</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
          <p class="pt-1">
            Keterangan Status: <br>
            B : Belum <br>
            P : Dalam Progres <br>
            S : Selesai <br>
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
