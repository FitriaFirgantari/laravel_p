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
                    <div class="table-responsive pt-2">


                        <table class="table table-bordered">
                            <thead class="mt-2">
                                <p class="mt-2"></p>
                                <p></p>
                                <tr align="center">
                                </tr>
                                <h3>Cetak Laporan Perbulan</h3>
                                <div class="car-body">
                                    <form class="forms-sample" method="POST" action="/cetak-barang">

                                        <p class="mt-2"></p>
                                        <div class="form-group">
                                            <label for="label">Tanggal Awal</label>
                                            <input type="date" name="tgawal" class="form-control" id="exampleInputName1" placeholder="tgawal">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Tanggal Akhir</label>
                                            <input type="date" name="tgakhir" class="form-control" id="exampleInputName1" placeholder="tgakhir">
                                        </div>

                                        <div class="input group mb-3">
                                            <a href="" onclick="this.href='/cetak-perbulan/{tgawal}/{tgakhir}'+ document.getElementById('tgawal').value + '/' + document.getElementById('tgakhir').value " target="_blank" class="btn btn-primary col-md-12">Cetak Laporan Perbulan</a>
                                        </div>

                                </div>
                                </form>

                    </div>
                    </table>

                </div>
            </div>
</section>

@endsection