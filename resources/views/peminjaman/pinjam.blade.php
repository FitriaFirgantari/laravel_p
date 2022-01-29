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
                    <h3 class="mt-2">Data Peminjaman Barang</h3>

                    <div class="mt-3"></div>
                    <a class="btn btn-outline-info" href="/tambah_pinjam">Tambah Data</a>
                    <a class="btn btn-outline-info" href="/cetak-form">Cetak</a>

                    <p class="mt-2"></p>
                    <form action="/cariPinjam" method="GET" class="">
                        <input type="text" name="cari" class="form-control form-control-lg" id="exampleInputCaril1" placeholder="Search now">
                        <p class="mt-2"></p>
                        <button class="btn btn-outline-info" type="submit">Search</button>
                    </form>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="mt-2">
                                <p class="mt-2"></p>
                                <p></p>
                                <tr align="center">

                                    <th scope="col">No</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Banyaknya</th>
                                    <th scope="col">Tanggal Terima</th>
                                    <th scope="col">Tanggal Pengembalian</th>
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
                                    <td>{{ $el->user }}</td>
                                    <td>{{ $el->nama_barang }}</td>
                                    <td>{{ $el->kode }}</td>
                                    <td>{{ $el->type }}</td>
                                    <td>{{ $el->banyaknya }}</td>
                                    <td>{{ $el->tanggal_t }}</td>
                                    <td>{{ $el->tanggal_p }}</td>
                                    <td>{{ $el->status }}</td>
                                    <td>{{ $el->keterangan }}</td>
                                    <td></a>
                                        <form action="/delete_pinjam/{{$el->id}}" method="POST">
                                            <a class="btn btn-primary btn-sm" href="/ubah_pinjam/{{$el->id}}"><i class="ti-pencil-alt"></i></a>
                                            @csrf

                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah akan menghapus data ini?')"><i class="ti-trash"></i></button>
                                        </form>
                                </tr>
                                @endforeach
                            </tbody>



                        </table>

                    </div>


                </div>
            </div>

        </div>
    </div>
</section>

@endsection