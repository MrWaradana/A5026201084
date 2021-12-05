
   @extends('layout.main')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

<h3>{{ $judul }}</h3>
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
        IDPegawai <select name="idpegawai" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>
        <div class="form-group">
            <label>Tanggal dan Waktu :</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="tanggal" value="{{ $a ->Tanggal }}"/>
                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>

                Status <br />
                <input type="radio" id="Hadir" name="status" value="H" @if ($a->Status === "H" ) checked="checked" @endif>
                <label for="Hadir">Hadir</label><br>
                <input type="radio" id="Izin" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                <label for="Izin">Izin</label><br>
                <input type="radio" id="Sakit" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                <label for="Sakit">Sakit</label><br>
                <input type="radio" id="Alpha" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                <label for="Alpha">Alpha</label>
        <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach

   <p> <a href="/absen"> Kembali</a></p>
   @endsection
