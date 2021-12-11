@extends('layout.main')

@section('title', 'Edit Bus')
@section('judulhalaman', 'Edit Data Bus')

@section('konten')

    <div class="container">
        @foreach($bus as $b)
        <form action="/bus/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $b->kodebus }}">
            <div class="form-group">
                <label for="merkbus">Merk Bus</label>
                <input type="text" class="form-control" name="merkbus" id="merkbus" placeholder="Merk Bus" required="required" value="{{ $b->merkbus }}">
              </div>
            <div class="form-group">
                <label for="jumlahbus">Jumlah Bus</label>
                <input type="number" class="form-control" name="jumlahbus" id="jumlahbus" placeholder="Jumlah Bus" required="required" value="{{ $b->jumlahbus }}">
            </div>
            <p><strong>Tersedia</strong></p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="tersedia" class="custom-control-input" value="H" @if ($b->tersedia === "Y" ) checked="checked" @endif>
                <label class="custom-control-label" for="ya">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="tersedia" class="custom-control-input" value="I" @if ($b->tersedia === "T" ) checked="checked" @endif>
                <label class="custom-control-label" for="tidak">Tidak</label>
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/bus" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
          </form>
          @endforeach
        </div>
@endsection
