@extends('main')

@section('title','UAS PDB')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Penduduk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Penduduk</a></li>
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
                            <strong class="card-title">Edit {{$pdk->nama}}</strong>
                        </div>
                        <div class="card-body">
            <form action="{{ route('penduduk.update', ['id' => $pdk->id]) }}" method="post">

                @csrf
                @method('PATCH')

                <div class="form-group">
                <label for="no">Nomor KK : </label>
                    <select name="no" id="no" class="form-control @error('no') is-invalid @enderror">
                        
                        @foreach($kartukeluarga as $kk)
                         @if($kk->id == $pdk->keluarga_id)
                        <option selected value="{{ $kk->id }}">{{ $kk->no }}</option>
                        
                        @else
                         <option value="{{ $kk->id }}">{{ $kk->no }}</option>
                        
                        @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input class="form-control transparent" name="nama" type="text" value="{{$pdk->nama}}" >
            </div>
            <div class="form-group">
                <label for="kode">NIK: </label>
                <input class="form-control transparent" name="nik" type="text" value="{{$pdk->nik}}" >
            </div>
            <div class="form-group">
                <label for="kode">Tempat Lahir: </label>
                <input class="form-control transparent" name="tempat" type="text" value="{{$pdk->tempat_lahir}}" >
            </div>
            <div class="form-group">
                <label for="kode">Tanggal Lahir: </label>
                <input class="form-control transparent" name="tanggal" type="date" value="{{$pdk->tanggal_lahir}}">
            </div>
            <div class="form-group">
            <label for="lp">Agama : </label>
            <select name="agama" class="form-control">
                <option selected value="{{$pdk->agama}}">{{$pdk->agama}}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            </div>
            <div class="form-group">
            <label for="jk">Jenis Kelamin : </label>
            <select name="jk" class="form-control">
                <option selected value="{{$pdk->jenis_kelamin}}">{{$pdk->jenis_kelamin}}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
            <div class="form-group">
            <label for="lp">Level pendidikan : </label>
                    <select name="lp" id="lp" class="form-control @error('lp') is-invalid @enderror">
                        @foreach($levelpen as $lp)
                         @if($lp->id == $pdk->level_pendidikan_id)
                        <option selected value="{{ $lp->id }}">{{ $lp->nama }}</option>
                        @else
                         <option value="{{ $lp->id }}">{{ $lp->nama }}</option>
                        @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
            <label for="pekerjaan">Pekerjaan : </label>
                    <select name="pekerjaan" class="form-control">
                        @foreach($pekerjaan as $pk)
                         @if($pk->id == $pdk->pekerjaan_id)
                        <option selected value="{{ $pk->id }}">{{$pk->nama}}</option>
                         @else
                        <option value="{{ $pk->id }}">{{ $pk->nama }}</option>
                        @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
            <label for="sp">Status Pernikahan : </label>
            <select name="sp" class="form-control">
                <option selected value="{{$pdk->status_pernikahan}}">{{$pdk->status_pernikahan}}</option>
                <option value="Belum menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Janda/Duda"> janda/duda</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sk">Status Keluarga : </label>
            <select name="sk" class="form-control">
                <option selected value="{{$pdk->status_keluarga}}">{{$pdk->status_keluarga}}</option>
                <option value="Ayah">Ayah</option>
                <option value="Ibu">Ibu</option>
                <option value="Anak">Anak</option>
                <option value="Orang tua">Orang tua</option>
            </select>
            </div>
            <div class="form-group">
            <label for="kwn">Kewarganegaraan : </label>
            <select name="kwn" class="form-control">
                        @foreach($kewarganegaraan as $kwn)
                         @if($kwn->id == $pdk->kewarganegaraan_id)
                        <option selected value="{{ $kwn->id }}">{{$kwn->nama}}</option>
                         @else
                        <option value="{{ $kwn->id }}">{{ $kwn->nama }}</option>
                        @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="ayah">Ayah: </label>
                <input class="form-control transparent" name="ayah" type="text" value="{{$pdk->ayah}}" >
            </div>
            <div class="form-group">
                <label for="ibu">Ibu: </label>
                <input class="form-control transparent" name="ibu" type="text" value="{{$pdk->ibu}}" >
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
