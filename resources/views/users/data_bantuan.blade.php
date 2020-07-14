@extends('../layout/template')

@section('judul','Halo Siswa/Siswi')

@section('konten')
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="row m-0">
                            <div class="col-sm-4">
                                <div class="page-header float-left">
                                    <div class="page-title">
                                        <h1>Dashboard</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="page-header float-right">
                                    <div class="page-title">
                                        <ol class="breadcrumb text-right">
                                            <li><a href="#">Biodata</a></li>
                                            <li><a href="#">Data Bantuan</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ./Breadcrumbs -->
                <div class="content">
                        <!-- Data Bantuan -->
                           <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Orang Tua</strong>
                                </div>
                                <div class="card-body" style="font-size: 12px;">
                                    <table class="table">
                                            <tr>
                                              <th scope="col">Penerima KPS</th>
                                              <td>First</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor KPS (jika Penerima KPS)</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Penerima KIP</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor KIP (jika Penerima KIP)</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Di Kartu KIP</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor KKS</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bank Penerima Bantuan</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor Rekening</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Rekening Atas Nama</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Layak Mendapatkan PIP</th>
                                                <td>Mark</td>
                                            </tr>
                                             <tr>
                                                <th scope="row">Alasan Layak Mendapatkan PIP</th>
                                                <td>Mark</td>
                                            </tr>
                                    </table>
                                    <a href="" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        <!-- ./ Data Bantuan -->
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

    @endsection
        