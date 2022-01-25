@extends('layouts.master')
@section('title', 'Laporan')
@section('parentPageTitle')
@section('page-style')
<link rel="stylesheet" href="{{asset('assetsAdmin/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')

<div class="container-fluid">
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Data Peserta</strong></h2>
                    <ul class="header-dropdown">
                        {{-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li> --}}
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <p>Data peserta pendaftaran Battle Of Squad</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Team</th>
                                    <th>Nama Ketua</th>
                                    <th>No WA</th>
                                </tr>
                            </thead>
                            <tbody>
                               {{-- kasih foreach disini --}}
                               @foreach ($data as $pendaftaran)
                               <tr>
                                   <td>{{$pendaftaran->nama_team}}</td>
                                   <td>{{$pendaftaran->nama_ketua}}</td>
                                   <td>{{$pendaftaran->no_wa}}</td>

                               </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Striped Rows -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2> <strong>Data</strong> Sponsor</h2>
                    <ul class="header-dropdown">
                        {{-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li> --}}
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <p>Data sponsor Battle Of Squad</p><div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Sponsor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datasponsor as $sponsor)
                               <tr>
                                   <td>{{$sponsor->nama_sponsor}}</td>
                               </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bordered Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Data</strong> Jadwal</h2>
                    <ul class="header-dropdown">
                        {{-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li> --}}
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <p>Data Jadwal Battle Of Squad</p><div class="table-responsive">
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Nama Event</th>
                                    <th>Jenis Tournament</th>
                                    <th>Tanggal Dimulai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datajadwal as $jadwal)
                               <tr>
                                   <td>{{$jadwal->nama_event}}</td>
                                   <td>{{$jadwal->jenis}}</td>
                                   <td>{{$jadwal->tanggal_mulai}}</td>
                               </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@stop
@section('page-script')
