@extends('layouts.master')

@section('title')
  Edit Transaksi
@stop
@section('konten')
<div class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Edit Transaksi </h4>
          </div>
          <div class="card-body">
            @if($tanggal=="")
              <form class="" action="{{Route('updatetransaksi',['id '=> $transaksi->id])}}" method="post">
            @else
              <form class="" action="{{Route('supdatetransaksi',['id '=> $transaksi->id,'tanggal'=>$tanggal])}}" method="post">
            @endif

              {{csrf_field()}}
              <input type="date" name="tanggal" class="form-control" readonly value="{{$transaksi->tanggal}}"> <br/>
              <div class="content">
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="barang"  value="{{$transaksi->barang}}" class="form-control" placeholder="Barang">
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" value="{{$transaksi->harga}}" class="form-control" placeholder="Rp.">
                    </div>
                  </div>
                  </div>

                  <div class="row">
                      <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-info btn-round">Update</button>
                        </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>
@stop
