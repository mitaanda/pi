@extends('layouts.app')

@section('content')
<section id="basic-horizontal-layouts">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Edit Kejuaraan</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                          <div class="form-body">
                              <div class="row">
                                  <input type="hidden" name="atlet_id" value="(FETCH FROM DATA)">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                                              <span>Nama Atlet</span>
                                          </div>
                                          <div class="col-md-8">
                                              <input type="text" placeholder="Mita Anda Rista" disabled>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Jenis</span>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select2 form-control" name="jenis" id="jenis">
                                                <option selected disabled>Pilih</option>
                                                <option value="Kejurkab/Kota">Kejurkab/Kota</option>
                                                <option value="Kejurda/Kejurprov">Kejurda/Kejurprov</option>
                                                <option value="Open Turnamen">Open Turnamen</option>
                                                <option value="Kejurnas">Kejurnas</option>
                                                <option value="Kejuaraan Internasional">Kejuaraan Internasional</option>
                                                <option value="Popnas">Popnas</option>
                                                <option value="Popda">Popda</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Cabor</span>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select2 form-control" name="cabor" id="cabor">
                                                <option selected disabled>Pilih</option>
                                                <option value="Basket">Basket</option>
                                                <option value="Futsal">Futsal</option>
                                                <option value="Badminton">Badminton</option>
                                              </select>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Medal</span>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="select2 form-control" name="medal" id="medal">
                                                <option selected disabled>Pilih</option>
                                                <option value="Emas">Emas</option>
                                                <option value="Perak">Perak</option>
                                                <option value="Perunggu">Perunggu</option>
                                              </select>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Sertifikat</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="sertifikat" name="sertifikat">
                                                <label class="custom-file-label" for="sertifikat">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Foto Keikutsertaan</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="buktifoto" name="buktifoto">
                                                <label class="custom-file-label" for="buktifoto">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
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