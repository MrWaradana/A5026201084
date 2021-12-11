@extends('layout.main')

@section('title', 'Tabel Tugas')

@section('judulhalaman', 'Tabel Tugas')

@section('konten')


    <div class="card">
        <div class="card-header d-flex">
          <h3 class="card-title">Tabel Tugas</h3>
          <a href="/tugas/tambah" class="ml-auto d-inline-block btn btn-info"> + Tambah Tugas Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped mb-4">
            <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Tanggal dan Waktu</th>
                <th>NamaTugas</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($tugas as $t)
                <tr>
                    <td>{{ $t->pegawai_nama }}</td>
                    <td>{{ $t->Tanggal }}</td>
                    <td>{{ $t->NamaTugas }}</td>
                    <td>{{ $t->Status }}</td>
                    <td>
                        <a href="/tugas/view/{{ $t->ID }}" class="btn btn-info"><i
                            class="fa fa-exclamation-circle" aria-hidden="true"></i> View Detail</a>
                        |
                        <a href="/tugas/edit/{{ $t->ID }}" class="btn btn-warning"><i class="fa fa-wrench" aria-hidden="true"></i> Edit</a>
                        |
                        <a href="/tugas/hapus/{{ $t->ID }}" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Nama Pegawai</th>
                <th>Tanggal dan Waktu</th>
                <th>NamaTugas</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
          <div class="container-fluid">
              {{ $tugas->links() }}
          </div>
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
