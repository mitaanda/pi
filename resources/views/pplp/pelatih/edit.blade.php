@extends('layouts.app')

@section('content')
<section id="basic-vertical-layouts">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Edit Data Pelatih PPLP</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
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
                                        <label for="hp">HP</label>
                                        <input type="text" id="hp" class="form-control" name="hp" placeholder="HP">
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
                                      <label for="sertifikat">Sertifikat</label>
                                      <input required type="file" class="form-control-file" id="sertifikat" name="sertifikat[]" multiple>
                                  </fieldset>
                                  </div>
                                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit" class="btn btn-primary glow">Simpan Perubahan</button>
                                </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection