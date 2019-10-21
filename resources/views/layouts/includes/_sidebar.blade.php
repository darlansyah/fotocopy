<div class="sidebar" data-color="white" data-active-color="danger">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="{{asset('/frontend')}}/assets/img/logo-small.png">
      </div>
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
      <!-- <div class="logo-image-big">
        <img src="../assets/img/logo-big.png">
      </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="active ">
        <a href="{{Route('indexdashboard')}}">
          <i class="nc-icon nc-bank nc-rubbish"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>
        <?php
        $tgl = date('Y-m-d');
         ?>
        <a href="{{Route('sindextransaksi',['tanggal' => $tgl])}}">
          <i class="nc-icon nc-paper text-primary"></i>
          <p class="text-primary">Transaksi</p>
        </a>
      </li>
      <li>
        <a href="{{Route('indextransaksi')}}">
          <i class="nc-icon nc-paper text-warning"></i>
          <p class="text-warning">History Transaksi</p>
        </a>
      </li>
    </ul>
  </div>
</div>
