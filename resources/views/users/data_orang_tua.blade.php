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
                                            <li><a href="#">Data Orang Tua</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ./Breadcrumbs -->
                <div class="content">
                        <!-- Data Orang Tua -->
                           <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Orang Tua</strong>
                                </div>
                                <div class="card-body" style="font-size: 12px;">
                                    <table class="table">
                                            <tr>
                                              <th scope="col" style="background-color: grey; color: white;">Nama Ayah</th>
                                              <td>IHSAN KARUNIA MINDARA</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tahun Lahir Ayah</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pendidikan Ayah</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pekerjaan Ayah</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gaji Ayah</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIK Ayah</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                              <th scope="col" style="background-color: grey; color: white;">Nama Ibu</th>
                                              <td>First</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tahun Lahir Ibu</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pendidikan Ibu</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pekerjaan Ibu</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gaji Ibu</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIK Ibu</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                              <th scope="col" style="background-color: grey; color: white;">Nama Wali</th>
                                              <td>First</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tahun Lahir Wali</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pendidikan Wali</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pekerjaan Wali</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gaji Wali</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIK Wali</th>
                                                <td>Mark</td>
                                            </tr>
                                    </table>
                                    <a href="" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        <!-- ./ Data Orang Tua -->
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

    @endsection
        