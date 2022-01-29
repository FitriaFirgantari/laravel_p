<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    @if (auth()->user()->role=="admin")
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="ti-palette menu-icon"></i>
        <span class="menu-title">Data Inventaris</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/BarangHabisPakai">Habis Pakai</a></li>
          <li class="nav-item"> <a class="nav-link" href="/BarangTidakHabisPakai">Tidak Habis Pakai</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dbarang">
        <i class="ti-layout-list-post menu-icon"></i>
        <span class="menu-title">Data Barang Rusak</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="/DataPeminjaman">
        <i class="ti-view-list-alt menu-icon"></i>
        <span class="menu-title">Data Peminjaman</span>
      </a>
    </li>



    </li>
  </ul>
</nav>