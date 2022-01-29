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
                            <h4 class="card-title">Edit Data Barang</h4>
                            <form action="/update_pinjam" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">




                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">User</label>
                                        <input type="user" name="user" value="{{$data->user}}" class="form-control" id="exampleInputName1" placeholder="User">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Barang</label>
                                        <input type="nama_barang" name="nama_barang" value="{{$data->nama_barang}}" class="form-control" id="exampleInputName1" placeholder="Nama Barang">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Kode</label>
                                        <input type="kode" name="kode" value="{{$data->kode}}" class="form-control" id="exampleInputName1" placeholder="Kode">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Type</label>
                                        <input type="type" name="type" value="{{$data->type}}" class="form-control" id="exampleInputName1" placeholder="Type">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Banyaknya</label>
                                        <input type="banyaknya" name="banyaknya" value="{{$data->banyaknya}}" class="form-control" id="exampleInputName1" placeholder="Banyaknya">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Tanggal Terima</label>
                                        <input type="date" name="tanggal_t" value="{{$data->tanggal_t}}" class="form-control" id="exampleInputName1" placeholder="Tanggal Terima">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Tanggal Pengembalian</label>
                                        <input type="date" name="tanggal_p" value="{{$data->tanggal_p}}" class="form-control" id="exampleInputName1" placeholder="Tanggal Pengembalian">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">Status</label>
                                        <input type="text" name="status" value="{{$data->status}}" class="form-control" id="exampleInputCity1" placeholder="Status">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">Keterangan</label>
                                        <input type="text" name="keterangan" value="{{$data->keterangan}}" class="form-control" id="exampleInputCity1" placeholder="Keterangan">
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