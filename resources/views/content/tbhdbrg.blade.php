@extends('layouts.template')

@section('content')
<div class="main-panel">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <p class="center">

        </p>


        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Data Barang</h4>
              <form action="/simpan_data_barang" method="POST">
                @csrf



                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Nama Barang</label>
                    <input type="nama_barang" name="nama_barang" class="form-control" id="exampleInputName1" placeholder="Nama Barang">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Kode</label>
                    <input type="kode" name="kode" class="form-control" id="exampleInputName1" placeholder="Kode">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputName1" placeholder="Tanggal">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Type</label>
                    <input type="type" name="type" class="form-control" id="exampleInputName1" placeholder="Type">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Stock</label>
                    <input type="stock" name="stock" class="form-control" id="exampleInputName1" placeholder="stock">
                  </div>

                  <div class="form-group">
                    <label>Upload gambar</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" name="upload" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                      <img src="" class="img-thumbnail" width="200px" />
                      <input type="hidden" name="hidden_image" class="form-control-file" id="hidden_image" value="" placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputCity1" placeholder="Harga">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Status</label>
                    <input type="text" name="status" class="form-control" id="exampleInputName1" placeholder="status">
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
            </div>
          </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection