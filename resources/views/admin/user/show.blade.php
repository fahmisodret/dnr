@extends('admin.layout.index')

@section('content')
<div class="col-md-12 card">
  <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Detail Kelurahan</h3>
        <hr/>
    </div>
    <div class="box-body">
        <hr style="margin: 10px 0 15px 0">
        <form name="form-soal" method="POST" class="form-horizontal" id="formSoal" action="{{ url('/admin/kelurahan/update/'.$item->id) }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Kelurahan</label>
                    <div class="col-sm-8">
                        <p>{{$item->kelurahan}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-8">
                        <p>{{$item->kecamatan}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket" class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-8">
                        <p>{{$item->kota}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div id="wrap-btn">
                            <a href="{{ url('/admin/kelurahan')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
