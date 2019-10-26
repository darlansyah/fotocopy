<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index(){

    //   $tahun = date('Y'); // 2019
    //   $bulan = date('m'); // 10
    //
    //   $transaksi = DB::select("SELECT * FROM `transaksi`
    //                         WHERE YEAR(tanggal) = $tahun AND
    //                          month(tanggal) = $bulan");
    //
    // return dd($transaksi);

      return view('dashboard.index');
    }

}
