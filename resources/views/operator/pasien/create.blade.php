@extends('operator.layout.index')

@section('content')
<div class="col-md-12 card">
  <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Input Pasien</h3>
        <hr/>
    </div>
    <div class="box-body">
        <hr style="margin: 10px 0 15px 0">
        <form name="form-soal" method="POST" class="form-horizontal" id="formSoal" action="{{ url('/operator/pasien/store') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="alamat" placeholder="Alamat" cols="2"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">No.Telepon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone" placeholder="No.Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Rt/Rw</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="rtrw" placeholder="09/09">
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Kelurahan</label>
                    <div class="col-sm-4">
                        <select name="kelurahan_id" class="form-control">
                            <option value="0">Pilih Kelurahan</option>
                            @foreach($kel as $item)
                                <option value="{{$item->id}}">{{$item->kelurahan.' | '.$item->kecamatan.' | '.$item->kota}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input name="tgl_lahir" class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label><input type="radio" name="jk" value="L"> <b>Laki-laki</b></label> &nbsp;&nbsp;&nbsp;
                            <label><input type="radio" name="jk" value="P"> <b>Perempuan</b></label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div id="wrap-btn">
                            <a href="{{ url('/operator/pasien')}}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-info" id="btnSimpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
