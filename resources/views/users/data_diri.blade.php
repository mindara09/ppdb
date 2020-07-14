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
                                            <li><a href="#">Data Diri</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- ./Breadcrumbs -->
                <div class="content">
                        <!-- Data Diri -->
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Diri</strong>
                                </div>
                                @if ($errors->any())
                                    <div class="container">
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                <div class="card-body" style="font-size: 12px;">
                                    @foreach($dataDiri as $d)
                                    <form method="post" action="/users/data-diri">
                                        <table class="table table-borderless">
                                                <tr>
                                                  <th scope="col">Nama Lengkap</th>
                                                  <td>
                                                      <input type="text" name="nama_lengkap" class="form-control" value="{{ $d->nama_lengkap }} ">
                                                  </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">NIS</th>
                                                    <td>
                                                        <input type="text" name="nis" class="form-control" value="{{ $d->nis }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">NISN</th>
                                                    <td>
                                                        <input type="text" name="nisn" class="form-control" value="{{ $d->nisn }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tanggal Lahir</th>
                                                    <td>
                                                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $d->tanggal_lahir }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tempat Lahir</th>
                                                    <td>
                                                        <input type="text" name="tempat_lahir" class="form-control" value="{{ $d->tempat_lahir }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">No.Kartu Keluarga</th>
                                                    <td>
                                                        <input type="text" name="no_kk" class="form-control" value="{{ $d->no_kk }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">NIK</th>
                                                    <td>
                                                        <input type="text" name="nik" class="form-control" value="{{ $d->nik }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Agama</th>
                                                    <td>
                                                        <input type="text" name="agama" class="form-control" value="{{ $d->agama }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alamat</th>
                                                    <td>
                                                        <input type="text" name="alamat" class="form-control" value="{{ $d->alamat }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kelurahan</th>
                                                    <td>
                                                        <input type="text" name="kelurahan" class="form-control" value="{{ $d->kelurahan }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kecamatan</th>
                                                    <td>
                                                        <input type="text" name="kecamatan" class="form-control" value="{{ $d->kecamatan }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kode Pos</th>
                                                    <td>
                                                        <input type="text" name="kodepos" class="form-control" value="1111111 ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">No Register Akte</th>
                                                    <td>
                                                        <input type="text" name="no_register_akte" class="form-control" value="{{ $d->no_register_akte }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jenis Tinggal</th>
                                                    <td>
                                                        <select class="form-control" name="jenis_tinggal">
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Wali">Wali</option>
                                                            <option value="Saudara">Saudara</option>
                                                            <option value="Nenek/Kakek">Nenek / Kakek</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Transportasi</th>
                                                    <td>
                                                        <input type="text" name="transportasi" class="form-control" value="{{ $d->transportasi }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nomer Telepon Rumah</th>
                                                    <td>
                                                        <input type="text" name="no_telprumah" class="form-control" value="{{ $d->no_telprumah }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nomer HP</th>
                                                    <td>
                                                        <input type="text" name="no_hp" class="form-control" value="{{ $d->no_hp }} ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email Pribadi</th>
                                                    <td>
                                                        <input type="email" name="email" class="form-control" value="{{ $d->email }} ">
                                                    </td>
                                                </tr>
                                        </table>
                                        {{ csrf_field() }}
                                        <button class="btn btn-primary" type="submit">
                                            Simpan
                                        </button>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                          Update Data
                                        </button>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        <!-- ./ Data Diri -->
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Data Diri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @foreach ($dataDiri as $d)
            <form method="post" action="/users/data-diri/{{ Crypt::encrypt($d->id) }}">
                <table class="table table-borderless">
                    <tr> 
                        <th scope="col">Nama Lengkap</th>
                        <td>
                            <input type="text" name="nama_lengkap" class="form-control" value="{{ $d->nama_lengkap }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">NIS</th>
                        <td>
                            <input type="text" name="nis" class="form-control" value="{{ $d->nis }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">NISN</th>
                        <td>
                            <input type="text" name="nisn" class="form-control" value="{{ $d->nisn }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal Lahir</th>
                        <td>
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $d->tanggal_lahir }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tempat Lahir</th>
                        <td>
                            <input type="text" name="tempat_lahir" class="form-control" value="{{ $d->tempat_lahir }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">No.Kartu Keluarga</th>
                        <td>
                            <input type="text" name="no_kk" class="form-control" value="{{ $d->no_kk }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">NIK</th>
                        <td>
                            <input type="text" name="nik" class="form-control" value="{{ $d->nik }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Agama</th>
                        <td>
                            <input type="text" name="agama" class="form-control" value="{{ $d->agama }} ">
                        </td>
                     </tr>
                    <tr>
                        <th scope="row">Alamat</th>
                        <td>
                            <input type="text" name="alamat" class="form-control" value="{{ $d->alamat }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Kelurahan</th>
                        <td>
                            <input type="text" name="kelurahan" class="form-control" value="{{ $d->kelurahan }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Kecamatan</th>
                        <td>
                            <input type="text" name="kecamatan" class="form-control" value="{{ $d->kecamatan }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Kode Pos</th>
                        <td>
                            <input type="text" name="kodepos" class="form-control" value="1111111 ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">No Register Akte</th>
                        <td>
                            <input type="text" name="no_register_akte" class="form-control" value="{{ $d->no_register_akte }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jenis Tinggal</th>
                        <td>
                            <select class="form-control" name="jenis_tinggal">
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Saudara">Saudara</option>
                                <option value="Nenek/Kakek">Nenek / Kakek</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Transportasi</th>
                        <td>
                            <input type="text" name="transportasi" class="form-control" value="{{ $d->transportasi }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nomer Telepon Rumah</th>
                        <td>
                            <input type="text" name="no_telprumah" class="form-control" value="{{ $d->no_telprumah }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nomer HP</th>
                        <td>
                            <input type="text" name="no_hp" class="form-control" value="{{ $d->no_hp }} ">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Email Pribadi</th>
                        <td>
                            <input type="email" name="email" class="form-control" value="{{ $d->email }} ">
                        </td>
                    </tr>
                </table>
                @endforeach
                {{ csrf_field() }}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan Ubah</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    @endsection
        