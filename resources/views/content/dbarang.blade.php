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
                    <h3 class="mt-2">Data Barang Rusak</h3>


                    <div class="mt-3"></div>
                    <a class="btn btn-outline-info" href="/tambah_data_barang"> <i class="ti-plus"></i> Tambah</a>
                    <a class="btn btn-outline-info" href="/cetak-barang"> <i class="ti-printer"></i> Cetak</a>
                    <p class="mt-2"></p>
                    <form action="/cariBarang" method="GET" class="navbar-from navbar-right">
                        <input type="text" name="cari" value="" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        <p class="mt-2"></p>
                        <button class="btn btn-outline-info" type="submit">Search</button>
                    </form>

                    <div class="table-responsive pt-2">
                        <table class="table">
                            <table class="table table-bordered">
                                <thead class="mt-2">
                                    <p class="mt-2"></p>
                                    <tr align="center">

                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Tanggal Terima</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
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
                                        <td>{{ $el->upload}}</td>
                                        <td>{{ $el->harga }}</td>
                                        <td>{{ $el->status }}</td>
                                        <td></a>
                                            <form action="/delete_data_barang/{{$el->id}}" method="POST">
                                                <a class="btn btn-primary btn-sm" href="/ubah_data_barang/{{$el->id}}"><i class="ti-pencil-alt"></i></a> |
                                                @csrf

                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah akan menghapus data ini?')"><i class="ti-trash"></i></button>
                                            </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                    </div>
                </div>
                </table>
                </table>

            </div>

        </div>
        {{ $data->links() }}
    </div>
    </div>
</section>

@endsection