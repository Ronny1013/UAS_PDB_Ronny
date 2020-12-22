
@extends('../main')

@section('title','UAS PDB')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Anggota</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">anggota</a></li>
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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                        <div class="text-right" style="margin-right:20px">
                        <a class="btn btn-primary update-pro" href="{{route('anggotakeluarga.create', [$id])}}" title="Tambah data Kartu Keluarga"><i class="fa fa-plus"></i> <span> Tambah</span></a>
                    </div>
                    <br>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nomor KK</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($penduduk as $pd)
                      <tr>
                        <td>{{ $pd->kartu_keluarga->no }}</td>
                        <td>{{ $pd->nama }}</td>
                        <td>{{ $pd->nik }}</td>
                 
                        <td>
                                       
                                        <form style="display: inline" method="POST" action="{{ route('penduduk.destroy', $pd->id) }}">
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
            </div><!-- .animated -->
        </div><!-- .content -->


@endsection