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
                                            <li><a href="#">Data Periodik</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ./Breadcrumbs -->
                <div class="content">
                        <!-- Data Periodik -->
                           <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Orang Tua</strong>
                                </div>
                                <div class="card-body" style="font-size: 12px;">
                                    <table class="table">
                                            <tr>
                                              <th scope="col">Anak Ke</th>
                                              <td>First</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jumlah Saudara</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tinggi Badan</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Berat Badan</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lingkar Kepala</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jarak Rumah ke Sekolah</th>
                                                <td>Mark</td>
                                            </tr>
                                             <tr>
                                                <th scope="row">Waktu Tempuh</th>
                                                <td>Mark</td>
                                            </tr>

                                        </table>
                                    <a href="" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        <!-- ./ Data Periodik -->
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

    @endsection
        