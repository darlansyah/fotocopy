
  <form class="" action="{{Route('ssimpantransaksi',['tanggal'=>$tanggal])}}" method="post">
  {{csrf_field()}}

  @if($tanggal == "")
  <input type="date" name="tanggal" required class="form-control"> <br/>
  @elseif($tanggal == date('Y-m-d'))
  <input type="date" name="tanggal" class="form-control" readonly  value="<?= date('Y-m-d') ?>"> <br/>
  @else
  <input type="date" name="tanggal" class="form-control" readonly  value="<?= $tanggal ?>"> <br/>
  @endif

    <div class="content">
      <div class="row">
        <div class="col-md-6 pr-1">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="barang" class="form-control"  placeholder="Barang">
          </div>
        </div>
        <div class="col-md-6 pl-1">
          <div class="form-group">
              <label>Harga</label>
              <input type="number" name="harga" class="form-control" required placeholder="Rp.">
          </div>
        </div>
        </div>

        <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-success btn-round">Tambam</button>
              </div>
        </div>
      </div>
</form>

  <!-- <input type="text" name="barang" placeholder="Barang"> <br/> -->
  <!-- <input type="number" name="harga" placeholder="Harga"> -->
  <!-- <input type="submit" value="Tambah"> -->
