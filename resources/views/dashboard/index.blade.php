@extends('layouts.master')
<?php
// var_dump(data_bulan_ini());
// die;
 ?>

@section('header')
  Dashboard
@stop
  @section('konten')
  <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><i class="nc-icon nc-money-coins text-warning"></i> 2019</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th> No  </th>
                        <th> Bulan </th>
                        <th> Jumlah </th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php
                      $no = 1;
                       ?>
                      @foreach(data_bulanan() as $data)
                      <tr>
                        <td>{{$no++}}  </td>
                        <td>{{$data['bulan']}}</td>
                        <td>{{titik_rupiah($data['harga'])}}  </td>
                      </tr>
                      @endforeach
                      <hr/>
                      <tr>
                        <td>  </td>
                        <td><b>Total<b/></td>
                        <td><b> {{data_tahunan()}} </b> </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{nama_bulan(date('m'))}} 2019</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th> No  </th>
                        <th> Tanggal </th>
                        <th> Barang </th>
                        <th> Harga </th>
                    </tr>git
                  </thead>
                    <tbody>
                      <?php
                      $no = 1;
                       ?>
                      @foreach(data_bulan_ini() as $d)
                      <tr>
                        <td>{{$no++}}  </td>
                        <td>{{$d->tanggal}}</td>
                        <td>{{$d->barang}} </td>
                        <td>{{$d->harga}} </td>
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
