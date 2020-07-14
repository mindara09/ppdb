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
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ./Breadcrumbs -->
                <div class="content">
                 <!-- Row Tabel -->
                    <div class="row">
                        <!-- Data Diri -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Diri</strong>
                                </div>
                                <div class="card-body" style="font-size: 12px;">
                                    <table class="table">
                                            <tr>
                                              <th scope="col">Nama Lengkap</th>
                                              <td>First</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIS</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NISN</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Lahir</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tempat Lahir</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">No.Kartu Keluarga</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NIK</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Agama</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alamat</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kelurahan</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kecamatan</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode Pos</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">No Register Akte</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jenis Tinggal</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Transportasi</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomer Telepon Rumah</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomer HP</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email Pribadi</th>
                                                <td>Mark</td>
                                            </tr>
                                    </table>
                                    <a href="{{ url('/users/diri')}} " class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Data Diri -->
                        <!-- Data Orang Tua -->
                        <div class="col-lg-6">
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
                        </div>
                        <!-- ./Data Orang Tua -->
                        <!-- Data Periodik -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Periodik</strong>
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
                        </div>
                        <!-- ./Data Periodik -->
                        <!-- Data Akademik -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Akademik</strong>
                                </div>
                                <div class="card-body" style="font-size: 12px;">
                                    <table class="table">
                                            <tr>
                                              <th scope="col">Asal Sekolah (SMP)</th>
                                              <td>First</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor UN (SMP)</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor Ijazah (SMP)</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Rencana Ekstrakurikuler 1</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Rencana Ekstrakurikuler 2</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Rencana Ekstrakurikuler 3</th>
                                                <td>Mark</td>
                                            </tr>

                                    </table>
                                    <a href="" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!-- ./Data Akademik -->
                        <!-- Data Bantuan -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Bantuan (Jika Ada)</strong>
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
                        </div>
                        <!-- ./Data Bantuan -->
                    </div>
                 <!-- ./Row Tabel -->
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

    @endsection
        