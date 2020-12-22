@extends('../main')

@section('title','UAS PDB')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>kk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">KK</a></li>
                            <li><a href="#">Table</a></li>
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
                            <strong class="card-title">Tambah</strong>
                        </div>
                        <div class="card-body">
            <form action="{{ route('kartukeluarga.store') }}" method="post">
                @csrf
                <div class="form-group">
                <label for="kode">No KK: </label>
                <input class="form-control transparent" name="no" type=text >
            </div>
            <div class="form-group">
            <label for="jorong">Jorong : </label>
                    <select name="jorong" class="form-control">
                        <option value="null" disabled selected>Opsi Jorong</option>
                        @foreach($jorong as $jr)
                        <option value="{{ $jr->id }}">{{ $jr->nama }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Pencatatan : </label>
                <input class="form-control transparent" name="tanggal" type= "date" >
            </div>
            <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
