<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\KartuKeluarga;
use App\Models\Kewarganegaraan;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Penduduk;

class ControllerPenduduk extends Controller
{
    public function index(){
        $penduduk = Penduduk::paginate(25);
        return view('penduduk.index', compact('penduduk'));
    }
    
    public function create(){
        $kk = KartuKeluarga::all();
        $kewarganegaraan= Kewarganegaraan::all();
        $pekerjaan= Pekerjaan::all();
        $levelpen= LevelPendidikan::all();
        $penduduk = Penduduk::all();
        return view('penduduk.create', compact('kk','penduduk','kewarganegaraan','pekerjaan','levelpen'));  
    }
    
    public function store(Request $request){
        $request->validate([
            'no'        => 'required',
            'nama'      => 'required',
            'nik'       => 'required',
            'tempat'    => 'required',
            'tanggal'   => 'required',
            'agama'     => 'required',
            'jk'        => 'required',
            'lp'        => 'required',
            'pekerjaan' => 'required',
            'sp'        => 'required',
            'sk'        => 'required',
            'kwn'       => 'required',
            'ayah'      => 'required',
            'ibu'       => 'required'
        ]);

            $pdk = new Penduduk();
            $pdk->keluarga_id = $request->input('no'); 
            $pdk->nama = $request->input('nama'); 
            $pdk->nik = $request->input('nik'); 
            $pdk->tempat_lahir = $request->input('tempat'); 
            $pdk->tanggal_lahir = $request->input('tanggal'); 
            $pdk->agama = $request->input('agama'); 
            $pdk->jenis_kelamin = $request->input('jk'); 
            $pdk->level_pendidikan_id = $request->input('lp'); 
            $pdk->pekerjaan_id = $request->input('pekerjaan'); 
            $pdk->status_pernikahan = $request->input('sp'); 
            $pdk->status_keluarga = $request->input('sk'); 
            $pdk->kewarganegaraan_id = $request->input('kwn'); 
            $pdk->ayah = $request->input('ayah'); 
            $pdk->ibu = $request->input('ibu'); 
            $pdk->save();
            
            return redirect()->route('penduduk.index');
    }
    
    public function show($id){
        $pdk = Penduduk::findOrFail($id);
        return view('penduduk.show', compact('pdk'));
    }
    
    public function edit($id){
        $pdk = Penduduk::findOrFail($id);
        $kartukeluarga = KartuKeluarga::all();
        $kewarganegaraan= Kewarganegaraan::all();
        $pekerjaan= Pekerjaan::all();
        $levelpen= LevelPendidikan::all();
        return view('penduduk.edit', compact('kartukeluarga','pdk','kewarganegaraan','pekerjaan','levelpen'));
    }
    
    public function update (Request $request, $id){
        $pdk=Penduduk::findOrFail($id);
            $request->validate([
            'no'        => 'required',
            'nama'      => 'required',
            'nik'       => 'required',
            'tempat'    => 'required',
            'tanggal'   => 'required',
            'agama'     => 'required',
            'jk'        => 'required',
            'lp'        => 'required',
            'pekerjaan' => 'required',
            'sp'        => 'required',
            'sk'        => 'required',
            'kwn'       => 'required',
            'ayah'      => 'required',
            'ibu'       => 'required'
            ]);

            $pdk->keluarga_id = $request->no; 
            $pdk->nama = $request->nama; 
            $pdk->nik = $request->nik; 
            $pdk->tempat_lahir = $request->tempat; 
            $pdk->tanggal_lahir = $request->tanggal; 
            $pdk->agama = $request->agama; 
            $pdk->jenis_kelamin = $request->jk; 
            $pdk->level_pendidikan_id = $request->lp; 
            $pdk->pekerjaan_id = $request->pekerjaan; 
            $pdk->status_pernikahan = $request->sp; 
            $pdk->status_keluarga = $request->sk; 
            $pdk->kewarganegaraan_id = $request->kwn; 
            $pdk->ayah = $request->ayah; 
            $pdk->ibu = $request->ibu; 
            $pdk->save();
               
               if ($pdk->save()){
                    session()->flash('flash_success','Berhasil Diupdate');
                
                     return redirect()->route('penduduk.show', [$pdk->id]);
                }
                return redirect()->route('penduduk.show');
        }
    public function destroy($id)
    {
        $pdk = Penduduk::findOrFail($id);
        $pdk->delete();
        return redirect()->route('penduduk.index')->with('danger', 'Data Kartu Keluarga '.$pdk->keluarga_id.' Berhasil Dihapus');
    }

}
