@extends('../main')

@section('title','UAS PDB')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>KK</h1>
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
                            <strong class="card-title">Edit Data {{ $kk->no }}</strong>
                        </div>
                        <div class="card-body">
            <form action="{{ route('kartukeluarga.update', ['id' => $kk->id]) }}" method="post">

                @csrf
                @method('PATCH')
                
                <div class="form-group">
                <label for="kode">No KK: </label>
                <input class="form-control transparent" name="no" value="{{ $kk->no}}">
            </div>
            <div class="form-group">
            <label for="jorong">Nama Jorong : </label>
                    <select name="jorong" id="jorong" class="form-control @error('jorong') is-invalid @enderror">
                        @foreach($jorong as $jr)
                         @if($jr->id == $kk->jorong_id)
                        <option selected value="{{ $jr->id }}">{{ $jr->nama }}</option>
                        @else
                         <option value="{{ $jr->id }}">{{ $jr->nama }}</option>
                        @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Pencatatan : </label>
                <input class="form-control transparent" name="tanggal" type= "date" value="{{ $kk->tanggal_pencatatan }}">
            </div>
            <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </form>
            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection
