<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use App\Models\Kewarganegaraan;
use App\Models\Pekerjaan;
use App\Models\LevelPendidikan;
use App\Models\Penduduk;

class ControllerAnggotaKeluarga extends Controller
{
    public function index($id){
        $penduduk = Penduduk::where('keluarga_id',$id)->get();
        
        return view('anggotakeluarga.index', compact('penduduk','id'));
    }
    
    public function create($id){
        $kk = KartuKeluarga::all();
        $penduduk = Penduduk::all();
        $kewarganegaraan= Kewarganegaraan::all();
        $pekerjaan= Pekerjaan::all();
        $levelpen= LevelPendidikan::all();
        
        return view('anggotakeluarga.create', compact('kk','penduduk','kewarganegaraan','pekerjaan','levelpen','id'));
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
            
            return redirect()->route('anggotakeluarga.index',[$pdk->id]);
    }
    
    public function destroy($id){
        $kk-> Penduduk::find($id);
        $kk->delete();
        session()->flash('flash_success', 'Berhasil Dihapus');
        
        return redirect()->route('anggotakeluarga.index','id');
    } 
    
}
