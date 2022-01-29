@extends('layouts.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <p class="mt-2"></p>
            <div class="right">


                <div class="card">
                </div>

                <div class="card-body">
                    <h3 class="mt-2">Data Barang Habis Pakai</h3>
                    <div class="table-responsive pt-2">

                        <div class="mt-3"></div>
                        <a class="btn btn-outline-info" href="/tambah_h">Tambah Data</a>
                        <a class="btn btn-outline-info" href="/cetak-barang">Cetak</a>

                        <p class="mt-2"></p>
                        <form class="form-sample" action="/cariHabis" method="GET">
                            <input type="text" name="cariHabis" class="form-control" id="exampleInputName1" placeholder="Cari">

                            <p class="mt-2"></p>
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </form>


                        <table class="table table-bordered">
                            <thead class="mt-2">
                                <p class="mt-2"></p>
                                <p></p>
                                <tr align="center">

                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Tanggal Terima</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Posisi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ket</th>
                                    <th scope="col">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0 ?>
                                @foreach ($data as $el)
                                <tr align="center">
                                    <th scope="row">{{++$i}}</th>
                                    <td>{{ $el->nama_barang }}</td>
                                    <td>{{ $el->kode }}</td>
                                    <td>{{ $el->tanggal }}</td>
                                    <td>{{ $el->type }}</td>
                                    <td>{{ $el->stock }}</td>
                                    <td>{{ $el->posisi }}</td>
                                    <td>{{ $el->harga }}</td>
                                    <td><img src="" alt="{{URL::to('/')}}/image/{{$el->gambar}}" width="70px"></td>
                                    <td>{{ $el->status }}</td>
                                    <td>{{ $el->keterangan }}</td>
                                    <td></a>
                                        <form action="/delete_h/{{$el->id}}" method="POST">
                                            <a class="btn btn-primary btn-sm" href="/ubah_h/{{$el->id}}"><i class="ti-pencil-alt"></i></a>
                                            @csrf

                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah akan menghapus data ini?')"><i class="ti-trash"></i></button>
                                        </form>
                                </tr>
                                @endforeach
                            </tbody>





                    </div>
                    </table>

                </div>
            </div>
</section>

@endsection