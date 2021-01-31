@extends('layouts.app')

@section('content')
<section class="users-edit">
  <div class="card">
      <div class="card-content">
          <div class="card-body">
              <ul class="nav nav-tabs mb-3" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                          <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Profil</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                          <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Kejuaraan</span>
                      </a>
                  </li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                    <form class="form form-vertical" action="#" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <label for="jk">Jenis Kelamin</label>
                                  <div class="form-group">
                                    <select class="select2 form-control" name="jk" id="jk">
                                        <option selected disabled>Pilih</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="sekolah">Sekolah</label>
                                      <input type="text" id="sekolah" class="form-control" name="sekolah" placeholder="Sekolah">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="kelas">Kelas</label>
                                      <input type="text" id="kelas" class="form-control" name="kelas" placeholder="Kelas">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="nisn">NISN</label>
                                      <input type="text" id="nisn" class="form-control" name="nisn" placeholder="NISN">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="tlahir">Tahun Lahir</label>
                                      <input type="text" id="tlahir" class="form-control" name="tlahir" placeholder="Tahun Lahir">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="tb">Tinggi Badan</label>
                                      <input type="text" id="tb" class="form-control" name="tb" placeholder="Tinggi Badan">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="bb">Berat Badan</label>
                                      <input type="text" id="bb" class="form-control" name="bb" placeholder="Berat Badan">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="usia">Usia</label>
                                      <input type="text" id="usia" class="form-control" name="usia" placeholder="Usia">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <label for="cabor">Cabor</label>
                                  <div class="form-group">
                                    <select class="select2 form-control" name="cabor" id="cabor">
                                        <option selected disabled>Pilih</option>
                                        <option value="Basket">Basket</option>
                                        <option value="Futsal">Futsal</option>
                                        <option value="Badminton">Badminton</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="alamat">Alamat</label>
                                      <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat">
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                      <label for="kotakab">Kota/Kabupaten Asal</label>
                                      <input type="text" id="kotakab" class="form-control" name="kotakab" placeholder="Kota/ Kabupaten Asal">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <fieldset class="form-group">
                                    <label for="ijazahsd">Ijazah SD/Sederajat</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="ijazahsd" name="ijazahsd">
                                        <label class="custom-file-label" for="ijazahsd">Pilih file</label>
                                    </div>
                                  </fieldset>
                                </div>
                                <div class="col-12">
                                  <fieldset class="form-group">
                                    <label for="ijazahsmp">Ijazah SMP/Sederajat</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="ijazahsmp" name="ijazahsmp">
                                        <label class="custom-file-label" for="ijazahsmp">Pilih file</label>
                                    </div>
                                  </fieldset>
                                </div>
                                <div class="col-12">
                                  <fieldset class="form-group">
                                    <label for="ijazahsma">Ijazah SMA/Sederajat</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="ijazahsma" name="ijazahsma">
                                        <label class="custom-file-label" for="ijazahsma">Pilih file</label>
                                    </div>
                                  </fieldset>
                                </div>
                                <div class="col-12">
                                  <fieldset class="form-group">
                                    <label for="aktalahir">Akta Kelahiran</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="aktalahir" name="aktalahir">
                                        <label class="custom-file-label" for="aktalahir">Pilih file</label>
                                    </div>
                                  </fieldset>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                  <button type="submit" class="btn btn-primary glow">Simpan Perubahan</button>
                              </div>
                            </div>
                        </div>
                    </form>
                  </div>
                  
                  <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-content">
                                      <div class="card-body card-dashboard">
                                          <div class="table-responsive">
                                              <table class="table zero-configuration">
                                                <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Jenis</th>
                                                      <th>Cabor</th>
                                                      <th>Medal</th>
                                                      <th>Sertifikat</th>
                                                      <th>Foto Keikutsertaan</th>
                                                      <th>Aksi</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>Kajurkab/Kota</td>
                                                      <td>Renang</td>
                                                      <td>Emas</td>
                                                      <td><a target="_blank" href="http://google.com">SERTIF-001</a></td>
                                                      <td><a target="_blank" href="http://google.com">FOTO-001</a></td>
                                                      <td>
                                                          <form action="#" method="post">
                                                              @csrf
                                                              @method('delete')
                                                              <a href="{{ route('pplpd.kejuaraan.edit') }}" class="btn btn-outline-success btn-sm"><i class="fa fa-pencil"></i> </a>
                                                              <button type="submit" class="btn btn-outline-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i> </button> 
                                                          </form>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection