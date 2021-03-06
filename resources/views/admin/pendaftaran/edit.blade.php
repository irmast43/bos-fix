@extends('layouts.master')
@section('title', 'Edit Pendaftaran')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('assetsAdmin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
<link rel="stylesheet" href="{{asset('assetsAdmin/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Edit</strong> Pendaftaran</h2>
                <ul class="header-dropdown">
                    {{-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li> --}}
                    <li class="remove">
                        <a role="button" href="{{route('pendaftaran.index')}}"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                @foreach($pendaftaran as $p)
                <form id="form_validation" action="/pendaftaran/update" method="POST">

                    @csrf
                    <input type="hidden" name="idpendaftaran" value="{{$p->idpendaftaran}}">
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nama Team" name="nama_team" value="{{$p->nama_team}}" required >
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nama Ketua" name="nama_ketua" value="{{$p->nama_ketua}}" required >
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Alamat Ketua" name="alamat" value="{{$p->alamat}}" required >
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="No WA Ketua" name="no_wa" value="{{$p->no_wa}}" required >
                    </div>
                    <div class="form-group form-float">
                        <input type="date" class="form-control" placeholder="Tanggal Pendaftaran" name="tanggal" value="{{$p->tanggal}}" required >
                    </div>

                    <button class="btn btn-raised btn-primary waves-effect" type="submit">Edit</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop
@section('page-script')
<script src="{{asset('assetsAdmin/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assetsAdmin/js/pages/forms/form-validation.js')}}"></script>
@stop
