@extends('layouts.master')
@section('title', 'Jadwal')
@section('parentPageTitle')
@section('page-style')
<link rel="stylesheet" href="{{asset('assetsAdmin/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
<!-- Basic Examples -->


<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Jadwal</strong> Pendaftaran </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="{{route('jadwal.create')}}">Tambah</a></li>
                            {{-- <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li> --}}
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" href="{{route('dashboardAdmin')}}"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Tanggal</th>
                                <th>Deskripsi Kegiatan</th>
                                <th>Gambar</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datajadwal as $jadwal)
                            <tr>
                                <td>{{$jadwal->nama_event}}</td>
                                <td>{{$jadwal->tanggal}}</td>
                                <td>{{$jadwal->deskripsi}}</td>
                                <td>{{$jadwal->gambar}}</td>
                                <td>{{$jadwal->action}}</td>
                                <td>
                                    <a href="/jadwal/edit/{{$jadwal->idjadwal}}" class="badge bg-warning btn-lg"><span data-feather="edit">Edit</span></a>
                                    <a href="/jadwal/delete/{{$jadwal->idjadwal}}" class="badge bg-danger btn-lg" onclick="return confirm(yakin ingin menghapus data?)"><span data-feather="x-circle">Delete</span></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assetsAdmin/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assetsAdmin/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assetsAdmin/js/pages/tables/jquery-datatable.js')}}"></script>
@stop
