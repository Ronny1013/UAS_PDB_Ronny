@extends('main')

@section('title', 'UAS PDB')

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
                            <strong class="card-title">Tabel Data</strong>
                        </div>
                        <div class="card-body">
                        <div class="text-right" style="margin-right:20px">
                        <a class="btn btn-primary update-pro" href="{{ route('penduduk.create') }}" title="Tambah data Kartu Keluarga"><i class="fa fa-plus"></i> <span> Tambah</span></a>
                    </div>
                    <br>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.KK</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($penduduk as $pdk)
                      
                      <tr>
                        <td>{{ $pdk->kartu_keluarga->no }}</td>
                        <td>{{ $pdk->nama }}</td>
                        <td>{{ $pdk->nik }}</td>
                        <td>
                             <a href="{{ route('penduduk.show', $pdk->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View</a>
                             <a href="{{ route('penduduk.edit', $pdk->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                             <form style="display: inline" method="POST" action="{{ route('penduduk.destroy', $pdk->id) }}">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                            <button type="submit" onclick="confirm('Yakin?')" class="btn btn-danger btn-xs" value="Delete user"><i class="fa fa-trash"></i> Delete</button>
                        </form>
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
        </div>

@endsection