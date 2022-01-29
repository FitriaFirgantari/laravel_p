@extends('layouts.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <h4>Barang habis pakai dan tidak</h4>
             <h1 class="mt-2">Daftar Inventaris Barang</h1>
            <table class="table-responsive">
                <thead>
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Ket</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <th scope="row">1</th>
                        <td>02/brng/bl/v/2018</td>
                        <td>Meja</td>
                        <td>500</td>
                        <td>Ruang Kelas</td>
                        <td>Untuk Kelas</td>
                        <td>G ada</td>
                         <td></a>
                        <button type="button" class="btn btn-outline-info btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Del</button>
                        
                    </tr>
                </tbody>
                
                 <tbody>
                    <tr align="center">
                        <th scope="row">2</th>
                        <td>01/brng/bl/v/2018</td>
                        <td>Kursi</td>
                        <td>500</td>
                        <td>Ruang Kelas</td>
                        <td>Untuk Kelas</td>
                        <td>Ga Ada</td>
                        <td><a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-success">Del</a>

                        
                    </tr>
                </tbody>
               


            </table>

        </div>
    </div>

</section>

@endsection