@extends('admin.layout.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="col-md-12 card">
  <div class="box box-primary">
    <div class="box-header with-border">
        <br/>
        <div class="col-md-6">
            <h3 class="box-title">Data Menu</h3>
        </div>
        <form name="form-soal" method="POST" class="form-horizontal" id="formSoal" action="{{ url('/admin/menu/store') }}">
            {{ csrf_field() }}
            <div class="form-group col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus placeholder="Name">
            </div>
            <div class="col-md-6">
                <Button type="submit" class="btn btn-success btn-sm">Tambah</Button> 
            </div>
        </form>
    </div>
    <div class="box-body">
        <hr style="margin: 10px 0 15px 0">
        {{-- <table class="table table-hover table-striped" id="table_user">
            <thead>
              <tr>
                <th>Name</th>
                <th>Plural</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @if(count($menus) <= 0)
                <tr>
                    <td colspan="4"><caption>Data Kosong</caption></td>
                <tr>
                @endif
                @foreach($menus as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->plural}}</td>
                    <td><div style="text-align:center">
                        <a href="{{url("admin/user/destroy/".$item->id)}}" class="btn btn-danger btn-xs">Hapus</a> 
                        <a href="{{url("admin/user/edit/".$item->id)}}" class="btn btn-warning btn-xs">Ubah</a> 
                        <a href="{{url("admin/user/show/".$item->id)}}" class="btn btn-success btn-xs">Detail</a>
                    </div></td>
                </tr>
                @endforeach
            </tbody>
        </table> --}}
        @if(count($menu) > 0)
            <div class="tree ">
                <ul>
                    @foreach($menu as $mainkey => $item)
                    <li>
                        <span class="col-md-6">
                            <i class="expanded">
                                <input type="checkbox" class="inp" value="{{$mainkey}}" data-check="{{$item['name']}}"/>
                            </i> 
                            <a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#{{$item['name']}}" aria-expanded="true" aria-controls="{{$item['name']}}">
                                <i class="collapsed"><i class="fas fa-folder"></i></i>
                                <i class="expanded"><i class="far fa-folder-open"></i></i>
                                {{$item['name']}}
                            </a>
                            <a class="btn btn-info btn-xs">edit</a>
                        </span>
                        @if(isset($item['child']))
                        <div id="{{$item['name']}}" class="collapse show">
                            <ul>
                                @foreach($item['child'] as $key => $sub)
                                <li>
                                    <span class="col-md-5">
                                        <input type="checkbox" value="{{$key}}" class="inp"/>
                                        <a href="#!"> {{$sub['name']}}</a>
                                        <a class="btn btn-info btn-xs">edit</a>

                                    </span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
<div class="tree ">
    <ul>
        <li>
            <span class="col-md-6">
                <i class="expanded">
                    <input type="checkbox" class="inp" data-check="Web"/>
                </i> 
                <a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#Web" aria-expanded="true" aria-controls="Web">
                    <i class="collapsed"><i class="fas fa-folder"></i></i>
                    <i class="expanded"><i class="far fa-folder-open"></i></i>
                    Web
                </a>
            </span>
            <div id="Web" class="collapse show">
                <ul>
                    <li>
                        <span>
                            <input type="checkbox" class="inp"/>
                            <a href="#!"> Link 1</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <input type="checkbox" class="inp"/>
                            <a href="#!"> Link 1</a>
                        </span>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <span class="col-md-6">
                <i class="expanded">
                    <input type="checkbox" class="inp" data-check="Wob"/>
                </i> 
                <a style="color:#000; text-decoration:none;" class="exp" data-toggle="collapse" href="#Wob" aria-expanded="true" aria-controls="Wob">
                    <i class="collapsed"><i class="fas fa-folder"></i></i>
                    <i class="expanded"><i class="far fa-folder-open"></i></i>
                    Wob
                </a>
            </span>
            <div id="Wob" class="collapse show">
                <ul>
                    <li>
                        <span>
                            <input type="checkbox" class="inp"/>
                            <a href="#!"> Link 1</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <input type="checkbox" class="inp"/>
                            <a href="#!"> Link 1</a>
                        </span>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $('.inp').click(function(){
        // var e = $(this);
        // console.warn($(this).find('.inp'));
        // ($(this).is(':checked'))
        // ?$(this).prop("checked", false)
        // :$(this).prop("checked", true);
        var target = $(this).data('check');
        $('#'+target).find('.inp').each(function (index, el) {
            ($(el).is(':checked'))
            ?$(el).prop("checked", false)
            :$(el).prop("checked", true);
        });
        // var target = $(this).data('check');

        // this.checked = value
        // this.setAttribute("check-value", value)
        // if (value == 0) {
        //     $(this).find(">[check-icon]")[0].className = "fa fa-circle-thin";
        // }
        // if (value == 1) {
        //     $(this).find(">[check-icon]")[0].className = "fa fa-check-circle-o";
        // }
        // if (value == 2) {
        //     $(this).find(">[check-icon]")[0].className = "fa fa-dot-circle-o";
        // }
    })
</script>
@endsection