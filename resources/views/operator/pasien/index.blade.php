@extends('operator.layout.index')

@section('content')
<div class="col-md-12 card">
  <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Data Pasien</h3>
        <a href="{{url("operator/pasien/create")}}" class="btn btn-success btn-xs">Tambah</a> 
        <hr/>
    </div>
    <div class="box-body">
        <hr style="margin: 10px 0 15px 0">
        <table class="table table-hover table-striped" id="table_soal">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Phone</th>
                <th>Kelurahan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @if(count($kel) <= 0)
                <tr>
                    <td colspan="5"><caption>Data Kosong</caption></td>
                <tr>
                @endif
                @foreach($kel as $item)
                <tr>
                    <td>{{$item->code}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{App\Kelurahan::find($item->kelurahan_id)->kelurahan}}</td>
                    <td><div style="text-align:center">
                        <a href="{{url("operator/pasien/destroy/".$item->id)}}" class="btn btn-danger btn-xs">Hapus</a> 
                        <a href="{{url("operator/pasien/edit/".$item->id)}}" class="btn btn-warning btn-xs">Ubah</a> 
                        <a href="{{url("operator/pasien/show/".$item->id)}}" class="btn btn-success btn-xs">Detail</a>
                    </div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
