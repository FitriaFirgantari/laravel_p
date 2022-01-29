@extends('layouts.template')

@section('content')
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<h1>Data Peminjaman</h1>
				
				
					<div class="card">
                <div class="card-body">
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                <thead>
                    <p class="mt-2"></p>
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Tanngal Terima</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <th scope="row">1</th>
                        <td>02/brng/bl/v/2018</td>
                        <td>12 Maret 2018</td>
                        <td>Meja</td>
                        <td>A</td>
                        <td>500</td>
                        <td>Rp. 500.000</td>
                        <td>g ada</td>
                        <td></a>
                        <button type="button" class="btn btn-outline-info btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Del</button>
                        
                    </tr>
                </tbody>

                <tbody>
                    <tr align="center">
                        <th scope="row">2</th>
                        <td>02/brng/hb/v/2018</td>
                        <td>12 Maret 2018</td>
                        <td>Komputer</td>
                        <td>A</td>
                        <td>20</td>
                        <td>Rp. 500.000</td>
                        <td>g ada</td>
                        <td></a>
                        <button type="button" class="btn btn-outline-info btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Del</button>

                        
                    </tr>
                </tbody>

                <tbody>
                    <tr align="center">
                        <th scope="row">3</th>
                        <td>03/brng/hb/v/2018</td>
                        <td>13 Maret 2018</td>
                        <td>Kursi</td>
                        <td>A</td>
                        <td>100</td>
                        <td>Rp. 100.000</td>
                        <td>g ada</td>
                        <td></a>
                        <button type="button" class="btn btn-outline-info btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Del</button>

                        
                    </tr>
                </tbody>



                    </div>
                </table>



			</div>
			
		</div>
		
	</section>

@endsection