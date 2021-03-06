@extends('layouts.master')
@section('title', 'Pendaftaran User')
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
                <h2><strong>Pendaftaran</strong> Battle Of Squad </h2>
            </div>
            <div class="body">
                <form id="form_validation" action="{{route('pendaftaran.store')}}" method="POST">
                    @csrf
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nama Team" name="nama_team" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nama Ketua" name="nama_ketua" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Alamat Ketua" name="alamat" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="No WA Ketua" name="no_wa" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="ID Ketua" name="id1" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nickname Ketua" name="nickname1" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="ID Anggota 1" name="id2" required>
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nickname Anggota 1" name="nickname2" required>
                    </div>

                    <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
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
