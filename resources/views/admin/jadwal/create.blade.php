@extends('layouts.master')
@section('title', 'Create Jadwal')
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
                <h2><strong>Basic</strong> Validation</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- <li><a href="javascript:void(0);">Action</a></li> --}}
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form id="form_validation" action="{{route('jadwal.store')}}" method="POST">
                    @csrf
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Nama Event" name="nama_event" required>
                    </div>
                    <div class="form-group form-float">
                        <textarea name="Deskripsi" id="" cols="110" rows="10"></textarea>
                    </div>
                    <div class="form-group form-float">
                        <input type="file" class="form-control" placeholder="Gambar" name="gambar" required>
                    </div>
                    <div class="form-group form-float">
                        <select id="action" name="action" class="form-control" value="">
                            <option value="Coming Soon">Coming Soon</option>
                            <option value="On Going">On Going</option>
                            <option value="Completed">Completed</option>
                          </select>
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