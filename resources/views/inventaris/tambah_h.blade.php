@extends('layouts.template')

@section('content')
<div class="main-panel">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <p class="center">
                <h4 class="mt-4"></h4>
                </th>
                </p>


                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Barang Tidak Habis Pakai</h4>
                            <form action="/simpan_h" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" name="stock" class="form-control" id="exampleInputName1" placeholder="Stock">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Posisi</label>
                                        <input type="text" name="posisi" class="form-control" id="exampleInputName1" placeholder="Posisi">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">Harga</label>
                                        <input type="text" name="harga" class="form-control" id="exampleInputCity1" placeholder="Harga">
                                    </div>

                                    <div class="form-group">
                                        <label>Upload gambar</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="upload" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                            <img src="{{URL::to('/')}}/image/{{$el->gambar}}" class="img-thumbnail" width="200px" alt="">
                                            <input type="hidden" name="hidden_image" class="form-control-file" disabled="" placeholder="Upload Image" value="{{$data->gambar}}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Status</label>
                                        <input type="text" name="status" class="form-control" id="exampleInputName1" placeholder="status">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="exampleInputCity1" placeholder="Keterangan">
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a href="/BarangHabisPakai"></a>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
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