@extends('layouts.master')

@section('konten')

<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">  Tong Sampah Transaksi</h4>
          <p> <span class="glyphicon glyphicon-trash"> </span> </p>
        </div>
        <div class="card-body">

          <!-- alert -->
          @if(session('hapus_permanen'))
          <div class="alert alert-danger" role="alert">
              {{session('hapus_permanen')}}
          </div>
          @endif
          <!-- end alert -->
          <div class="table-responsive">
            <table class="table">
              <!-- <a href="{{Route('tambahtransaksi')}}"> Tambah </a> || <a href="{{Route('tong_sampahtransaksi')}}"> Tong Sampah </a> -->
              <thead class=" text-primary">
                <tr>
                  <th> no </th>
                  <th> Tanggal </th>
                  <th> Barang </th>
                  <th> harga </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
    <?php
    $no = 1;
     ?>
    @foreach($transaksi as $t)
    <tr>
      <td> {{$no++}} </td>
      <td>{{$t->tanggal}}  </td>
      <td> {{$t->barang}} </td>
      <td> {{$t->harga}} </td>
      <td>
       <a class="btn btn-success  btn-sm" href="{{Route('ktong_sampahtransaksi',['id' => $t->id])}}">  Kembali </a>
       <a class="btn btn-danger  btn-sm" href="{{Route('phapusTransaksi',['id' => $t->id])}}">  hapus Permanen </a>
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

<table border="1">


</table>

@stop
