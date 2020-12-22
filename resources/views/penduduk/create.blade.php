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
                            <strong class="card-title">Tambah</strong>
                        </div>
                        <div class="card-body">
            <form action="{{ route('penduduk.store') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="kk">No.KK: </label>
                    <select name="no" class="form-control">
                        <option value="null" disabled selected>Nomor Keluarga</option>

                        @foreach($kk as $no)
                        <option value="{{ $no->id }}">{{ $no->no }}</option>

                        @endforeach
                    </select>
          
            </div>
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input class="form-control transparent" name="nama" type="text" >
            </div>
            <div class="form-group">
                <label for="nik">NIK: </label>
                <input class="form-control transparent" name="nik" type="text" >
            </div>
            <div class="form-group">
                <label for="tempat">Tempat Lahir: </label>
                <input class="form-control transparent" name="tempat" type="text" >
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Lahir: </label>
                <input class="form-control transparent" name="tanggal" type="date" >
            </div>
            <div class="form-group">
            <label for="agama">Agama : </label>
            <select name="agama" class="form-control">
                <option value="null" disabled selected>Opsi Agama</option>
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
                <option value="null" disabled selected>Opsi Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
            <div class="form-group">
            <label for="lp">Level pendidikan : </label>
                    <select name="lp" class="form-control">
                        <option value="null" disabled selected>Opsi Level Pendidikan</option>
                        
                        @foreach($levelpen as $lp)
                        <option value="{{ $lp->id }}">{{ $lp->nama }}</option>

                        @endforeach
                    </select>
            </div>
            <div class="form-group">
            <label for="pekerjaan">Pekerjaan : </label>
                    <select name="pekerjaan" class="form-control">
                        <option value="null" disabled selected>Opsi Pekerjaan</option>
                        
                        @foreach($pekerjaan as $pj)
                        <option value="{{ $pj->id }}">{{ $pj->nama }}</option>
                        
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
            <label for="sp">Status Pernikahan : </label>
            <select name="sp" class="form-control">
                <option value="null" disabled selected>Opsi Status Pernikahan..</option>
                <option value="Belum menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Janda/Duda"> Janda/duda</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sk">Status Keluarga : </label>
            <select name="sk" class="form-control">
                <option value="null" disabled selected>Opsi Status Keluarga..</option>
                <option value="Ayah">Ayah</option>
                <option value="Ibu">Ibu</option>
                <option value="Anak">Anak</option>
                <option value="Orang tua">Orang tua</option>
            </select>
            </div>
            <div class="form-group">
            <label for="kwn">Kewarganegaraan : </label>
                    <select name="kwn" class="form-control">
                        <option value="null" disabled selected>Opsi Kewarganegaraan</option>
                        
                        @foreach($kewarganegaraan as $kw)
                        <option value="{{ $kw->id }}">{{ $kw->nama }}</option>

                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="ayah">Ayah: </label>
                <input class="form-control transparent" name="ayah" type="text" >
            </div>
            <div class="form-group">
                <label for="ibu">Ibu: </label>
                <input class="form-control transparent" name="ibu" type="text" >
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
