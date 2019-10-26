

<?php
use Illuminate\Support\Facades\DB;

function rupiah($rupiah){
  return "Rp. ".$rupiah;
}

function titik_rupiah($harga){
  $harga = number_format($harga, 0, ".", ".");

  return rupiah($harga);
}

function data_bulanan(){
  $tahun =  date('Y');

  $data = array();
  for ($i=1; $i <= 12 ; $i++) {
      $jumlah = DB::select("SELECT SUM(harga) as harga FROM `transaksi`
      WHERE YEAR(tanggal) = $tahun AND month(tanggal) = $i");

   $data[] =  [$jumlah,'bulan'=> $i];

  }

  $data01 = array();
  for ($j=0; $j <12 ; $j++) {
    $data01[] = [
      'harga' =>   $data[$j][0][0]->harga,
      'bulan' => nama_bulan($data[$j]['bulan'])
      ];
  }

  return $data01;
}

function nama_bulan($bulan){
  $nama_bulan = ['Januari',
                  'Febuari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'November',
                  'Desember'];

  return $nama_bulan[$bulan - 1];
}

function data_tahunan(){
  $tahun =  date('Y');
  $jumlah = DB::select("SELECT SUM(harga) as harga FROM `transaksi`
  WHERE YEAR(tanggal) = $tahun");
  return titik_rupiah($jumlah[0]->harga);
}

function data_bulan_ini(){
  $tahun = date('Y');
  $bulan = date('m');

  $data = DB::select("SELECT * FROM `transaksi`
                        WHERE YEAR(tanggal) = $tahun AND
                         month(tanggal) = $bulan");

  return $data;
}
  function data_tgl_ini(){
    $tahun = date('Y');
    $bulan = date('m');
    $tgl = date('d');
    $jumlah = DB::select("SELECT SUM(harga) as harga FROM `transaksi`
                          WHERE YEAR(tanggal) = $tahun AND
                          		month(tanggal) = $bulan AND
                                day(tanggal) = $tgl");
    return titik_rupiah($jumlah[0]->harga);
  }


 ?>
