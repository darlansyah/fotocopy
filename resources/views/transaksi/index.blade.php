<?php
// var_dump(data_bulanan());
// die;

 ?>

@extends('layouts.master')

@section('header')
<p> Transaksi    <l class="nc-icon nc-calendar-60"> </i>  {{Carbon\Carbon::now()}} </p>
@stop
@section('title')
Transaksi
@stop


@section('konten')

<div class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">

          @if($tanggal=="")
            <h4 class="card-title"> Tambah Transaksi</h4>
          @elseif($tanggal == date('Y-m-d'))
            <h4 class="card-title"> Tambah Transaksi Hari Ini</h4>
          @else
            <h4 class="card-title"> Tambah {{$tanggal}}</h4>
          @endif


        </div>
        <div class="card-body">
            @include('transaksi.tambah')
        </div>
      </div>
    </div>

    <!-- ---- -->
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">


          <!-- alert -->
          @if($tanggal=="")
            <h4 class="card-title"> Data Transaksi  <br/> </h4>
            <h4 class="card-title " >
            <a class="btn btn-danger btn-sm" href="{{Route('tong_sampahtransaksi')}}"> Tong Sampah </a> </h4>
          @elseif($tanggal == date('Y-m-d'))
            <h4 class="card-title"> Transaksi Hari Ini </h4>
          @else
            <h4 class="card-title"> Transaksi Hari {{$tanggal}} <br/> <l class="nc-icon nc-calendar-60"> </i>   {{$tanggal}} </h4>
          @endif
          @if(session('tambah'))
          <div class="alert alert-success" role="alert">
              {{session('tambah')}}
          </div>
          @endif
          @if(session('edit'))
          <div class="alert alert-warning" role="alert">
              {{session('edit')}}
          </div>
          @endif
          @if(session('hapus_sementara'))
          <div class="alert alert-danger" role="alert">
              {{session('hapus_sementara')}}
          </div>
          @endif
          @if(session('kembali'))
          <div class="alert alert-success" role="alert">
              {{session('kembali')}}
          </div>
          @endif
          <!-- end alert -->

        </div>
        <div class="card-body">


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
                  <td> {{titik_rupiah($t->harga)}} </td>
                  <td>
                    @if($tanggal=="")
                     <a class="btn btn-warning btn-sm" href="{{Route('edittransaksi',['id' => $t->id])}}">  Edit </a>
                     @else
                     <a class="btn btn-warning btn-sm" href="{{Route('sedittransaksi',['id' => $t->id,'tanggal' => $tanggal])}}">  Edit </a>
                     @endif
                   <a class="btn btn-danger btn-sm" href="{{Route('hapustransaksi',['id' => $t->id])}}">  Hapus </a>
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


@stop
