@extends('operator.layout.index')

@section('content')
<div class="col-md-12 card">
  <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Detail Pasien</h3>
        <hr/>
    </div>
    <div class="box-body">
        <hr style="margin: 10px 0 15px 0">
        <form name="form-soal" method="POST" class="form-horizontal" id="formSoal" action="{{ url('/operator/pasien/update/'.$item->id) }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6" style="border-right: solid 1px;">
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Kode</label>
                            <div class="col-sm-8">
                                <p>{{$item->code}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Nama</label>
                            <div class="col-sm-8">
                                <p>{{$item->name}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Alamat</label>
                            <div class="col-sm-8">
                                <p>{{$item->alamat}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Phone</label>
                            <div class="col-sm-8">
                                <p>{{$item->phone}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Rt/Rw</label>
                            <div class="col-sm-8">
                                <p>{{$item->rtrw}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Kelurahan</label>
                            <div class="col-sm-8">
                                <p>{{App\Kelurahan::find($item->kelurahan_id)->kelurahan}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <p>{{$item->tgl_lahir}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paket" class="col-sm-6 control-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <p>{{$item->tgl_lahir}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div id="wrap-btn">
                            <a href="{{ url('/operator/pasien')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
