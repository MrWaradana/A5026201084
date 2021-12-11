@extends('layout.main')

@section('title', 'Tabel Bus')
@section('judulhalaman', 'Tabel Bus')

@section('konten')

    <div class="card">
        <div class="card-header d-flex">
          <h3 class="card-title">Tabel Bus</h3>
          <a href="/bus/tambah" class="ml-auto d-inline-block btn btn-info"> + Tambah Bus Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container-fluid">
                <form action="/bus/cari" class="d-flex justify-content-between mb-4" method="GET">
                    <input type="text" class="form-control" name="cari" placeholder="Cari Bus berdasarkan merk .." value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-default" value="CARI">
                </form>
            </div>
          <table id="example1" class="table table-bordered table-striped mb-4">
            <thead>
            <tr>
                <th>Merk Bus</th>
                <th>Jumlah Bus</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($bus as $b)
                <tr>
                    <td>{{ $b->merkbus }}</td>
                    <td>{{ $b->jumlahbus }}</td>
                    <td>{{ $b->tersedia }}</td>
                    <td>
                        <a href="/bus/view/{{ $b->kodebus }}" class="btn btn-info"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> View Detail</a>
                        |
                        <a href="/bus/edit/{{ $b->kodebus }}" class="btn btn-warning"><i class="fa fa-wrench" aria-hidden="true"></i> Edit</a>
                        |
                        <a href="/bus/hapus/{{ $b->kodebus }}" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Merk Bus</th>
                <th>Jumlah Bus</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            </tfoot>
          </table>
          <div class="container-fluid d-flex justify-content-start">
              {{ $bus->links() }}
          </div>

          <p class="pt-1">
            Keterangan Tersedia: <br>
            Y : Ya <br>
            T : Tidak <br>
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
