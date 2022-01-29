@extends('layouts.template')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h4 class="font-weight-bold mb-0">Sarana dan Prasarana DHB</h4>
          </div>
          <div>
            <form action="/cetak-form">
              <button type="submit" class="btn btn-primary btn-icon-text btn-rounded" href="/cetak-barang">
                <i class="ti-clipboard btn-icon-prepend"></i>Report
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>




    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <div class="row">

              <div class="ml-xl-4">
                <h4>Selamat Datang!<h4>
                    <p class="description">Sarana dan Prasarana STIKes Dharma Husada
                    </p>


                    </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-3 grid-margin stretch-card">

        <div class="card">
          <button type="button">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Data Barang Habis Pakai</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h4 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">100 Barang</h4>
                <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
              <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small></small></span></p>
            </div>
        </div>
        </button>
      </div>

      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <button type="button">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Data Barang Tidak Habis Pakai</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h4 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">200 Barang</h4>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
              <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small></small></span></p>
            </div>
        </div>
        </button>
      </div>

      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <button type="button">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Data Barang Rusak</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h4 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">123 Barang</h4>
                <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
              <p class="mb-0 mt-2 text-success"><span class="text-black ml-1"><small></small></span></p>
            </div>
        </div>
        </button>
      </div>

      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <button type="button">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Data Pemijaman</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h4 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">120 User</h4>
                <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
              <p class="mb-0 mt-2 text-success"><span class="text-black ml-1"><small></small></span></p>
            </div>
        </div>
        </button>
      </div>


    </div>


    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">2021 Sarana dan Prasarana DHB</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> website <a href="https://www.stikes.ac.id/" target="_blank">STIKes Dharma Husada</a> </span>
      </div>
    </footer>


  </div>
</div>



@endsection