<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Transaksi;

class TransaksiController extends Controller
{
    public function index($tanggal = ""){

      if ($tanggal=="") {
        $transaksi = Transaksi::orderBy('created_at','DESC')->get();
        return view('transaksi.index',['transaksi' => $transaksi,'tanggal' => $tanggal]);
      }
      else{
        $transaksi = Transaksi::where('tanggal',$tanggal)->orderBy('created_at','DESC')->get();
        return view('transaksi.index',['transaksi' => $transaksi,'tanggal' => $tanggal]);
      }
    }

    public function tambah(){
      return view('transaksi.tambah');
    }

    public function simpan($tanggal = "", Request $request){
      if ($tanggal=="") {
        Transaksi::create($request->all());
        return redirect('transaksi/index')->with('tambah','Data Berhasil Ditambahkan');
      }
      else{
        Transaksi::create($request->all());
        return redirect('transaksi/index/'.$tanggal.'')->with('tambah','Data Barhasil Ditambahkan');
      }


    }

    public function edit($id,$tanggal=""){
      if ($tanggal=="") {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',['transaksi' => $transaksi,'tanggal'=> $tanggal]);
      }
      else {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',['transaksi' => $transaksi,'tanggal' => $tanggal]);
      }

    }
    public function update($id,$tanggal="",Request $request){
      if ($tanggal=="") {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('transaksi/index')->with('edit','Data Berhasil Diedit');
      }
      else {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('transaksi/index/'.$tanggal.'')->with('edit','Data Berhasil Diedit');
      }

    }
    public function hapus($id){
      $transaksi = Transaksi::find($id);
      $transaksi->delete();
      return redirect()->back()->with('hapus_sementara','Data Berhasil Dihapus');
    }
    public function tong_sampah(){
      $transaksi = Transaksi::onlyTrashed()->orderBy('deleted_at','DESC')->get();
      return view('transaksi.tong_sampah',['transaksi' => $transaksi]);
    }
    public function kembalikan($id){
      $transaksi = Transaksi::onlyTrashed()->where('id',$id);
      $transaksi->restore();
      return redirect('transaksi/index')->with('kembali','Data Berhasil Dikembalikan');
    }
    public function hapus_permanen($id){
      $transaksi = Transaksi::onlyTrashed()->where('id',$id);
      $transaksi->forceDelete();
      return redirect()->back()->with('hapus_permanen','Data Berhasil Dihapus Permanen');
    }

}
