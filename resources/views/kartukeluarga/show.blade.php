@extends('../main')

@section('title','UAS PDB')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data {{ $kk->no }}</strong>
                        </div>
                        <div class="card-body">
            <div class="form-group">
                <label for="kode">Nama Jorong: </label>
                <input class="form-control transparent" disabled value="{{ $kk->jorong->nama}}">
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Pencatatan : </label>
                <input class="form-control transparent" disabled value="{{ $kk->tanggal_pencatatan }}">
            </div>
            <br>
            </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection
