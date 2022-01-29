@extends('layouts.template')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <h2>Laporan</h2>

      </head>

      <body>
        <div class="form-group">
          <p align="center" <b>Laporan Data Barang Inventaris</b></p>
          <table class="static" align="center" rulus="all" border="ipx" style="width: 95;">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Kode</th>
              <th>Tanggal</th>
              <th>Type</th>
              <th>Stock</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Status</th>
            </tr>
            @foreach ($data as $el)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $el->nama_barang }}</td>
              <td>{{ $el->kode }}</td>
              <td>{{ $el->tanggal }}</td>
              <td>{{ $el->type }}</td>
              <td>{{ $el->stock }}</td>
              <td>{{ $el->upload }}</td>
              <td>{{ $el->harga }}</td>
              <td>{{ $el->status }}</td>
            </tr>
            @endforeach
          </table>
        </div>
    </div>

</section>

@endsection