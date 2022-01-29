<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cetak Laporan Sarana dan Prasarana</title>
</head>

<body>
    <div class="col-xs-12">
        <div style="text-align:justify; margin-top: 20px">
            <img src="images/logo.jpg" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;">
            <p style="text-align: center; line-height: 20px">
                <span style="font-size: 20px;"><strong>STIKes Dharma Husada Kota Bandung</strong></span><br>
                <span style="font-size: 12px">Jl. Ters Jakarta, Kota Bandung, Jawa Barat 40135</span><br>
                <span style="font-size: 12px">Website : https://www.stikes.ac.id/</span>
            </p>
        </div>
        <div style="clear:both"></div><br>

    </div>

    <div class="col-xs-12">
        <h3>Barang Habis Pakai</h3>
        <div class="table-responsive pt-2">
            <table class="table table-bordered table-striped">
                <thead>
                    <table class="table table-bordered">
                        <thead class="mt-2">
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
                                <td>{{ $el->upload }}</td>
                                <td>{{ $el->harga }}</td>
                                <td>{{ $el->status }}</td>
                                <td></a>

                            </tr>
                            @endforeach
                        </tbody>


        </div>
    </div>
    </table>
    </table>




    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>