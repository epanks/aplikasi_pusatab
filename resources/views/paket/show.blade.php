@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-3">
    <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <h1 class="profile-username text-center">
            {{$data_paket->nmpaket}}
        </h1>  
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <p class="text-muted text-center">{{$data_paket->tblbalai->nmbalai}}</p>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <p class="text-muted text-center">Kode Output</p>
        <p class="text-muted text-center">{{$data_paket->tblkdoutput->nmoutput}}</p>
    </div>
</div>
<div class="row mt-2">    
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text"><a href="#">Pagu</a></span>
                <span class="info-box-number">
                    <small>Rp.</small>
                    {{number_format($data_paket->pagurmp)}}
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text"><a href="#">Keuangan</a></span>
                <span class="info-box-number">
                    <small>Rp.</small>
                    {{number_format($data_paket->pagurmp)}}
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-line"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">                
                    Progres Keuangan
                </span>
                <span class="info-box-number">
                    {{$data_paket->paket7->progres_keu}}
                    <small>%</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-bar"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">Progres Fisik</a></span>
                <span class="info-box-number">
                    {{$data_paket->paket7->progres_fisik}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-2">    
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text"><a href="#">Output</a></span>
                <span class="info-box-number">
                    {{number_format(($data_paket->trgoutput),2)}}
                    <small>{{$data_paket->tblsatoutput->nmsatoutput}}</small>
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text"><a href="#">Outcome</a></span>
                <span class="info-box-number">
                    {{number_format(($data_paket->trgoutcome),2)}}
                    <small>{{$data_paket->satoutcome}}</small>
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-line"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">                
                    Progres Keuangan
                </span>
                <span class="info-box-number">
                    {{$data_paket->paket7->progres_keu}}
                    <small>%</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-bar"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">Progres Fisik</a></span>
                <span class="info-box-number">
                    {{$data_paket->paket7->progres_fisik}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Catatan</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNew">
                    <a href="#"> Add New></a>
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                </div>
            </div>        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th width="50px">No</th>
                            <th>Masalah</th>
                            <th>Tindak Lanjut</th>
                            <th>Keterangan</th>
                            <th width="100px">Modify</th>
                            
                        </tr>

                    @foreach ($data_paket as $no => $paket)  
                    
                        <tr>                            
                            <td>{{++$no}}</td>
                            <td>{{$paket->nmpaket}}</td>
                            <td>{{$paket}}</td>
                            <td>{{$paket}}</td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#">
                                    <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                </a>
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

@endsection