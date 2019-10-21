@extends('layouts.master')

@section('title')
  Transaksi
@stop


@section('konten')

<div class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Tambah Transaksi </h4>
            <p class="text-primary "> <l class="nc-icon nc-calendar-60"> </i>   {{Carbon\Carbon::now()}} </p>
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
          <h4 class="card-title"> Transaksi Hari Ini || <?=  date('d-m-Y')?></h4>
          <a href="{{Route('tong_sampahtransaksi')}}"> Tong Sampah </a>
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
                  <td> Rp.  {{$t->rp_harga()}} </td>
                  <td> <a href="{{Route('edittransaksi',['id' => $t->id])}}">  Edit </a>
                    ||
                   <a href="{{Route('hapustransaksi',['id' => $t->id])}}">  Hapus </a>
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
