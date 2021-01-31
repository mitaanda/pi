@extends('layouts.app')

@section('content')
<section class="page-users-view">
  <div class="row">
      <div class="col-12">
        <a href="{{ route('pplp.pelatih.edit') }}" class="btn btn-primary mr-1 mb-1"><i class="feather icon-edit-1"></i> Edit</a>
          <div class="card">
              <div class="card-header">
                  <div class="card-title">Detail Data Pelatih PPLP</div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                          <table>
                              <tr>
                                  <td class="font-weight-bold">Nama</td>
                                  <td>Mita Anda Rista</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">Jenis Kelamin</td>
                                  <td>Perempuan</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">Tahun Lahir</td>
                                  <td>2000</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">Usia</td>
                                  <td>20th</td>
                              </tr>
                          </table>
                      </div>
                      <div class="col-12 col-md-12 col-lg-5">
                          <table class="ml-0 ml-sm-0 ml-lg-0">
                              <tr>
                                  <td class="font-weight-bold">Cabor</td>
                                  <td>Renang</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">Tinggi Badan</td>
                                  <td>160</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">Berat Badan</td>
                                  <td>60</td>
                              </tr>
                              <tr>
                                  <td class="font-weight-bold">HP</td>
                                  <td>082234897335</td>
                              </tr>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-12 ">
          <div class="card">
              <div class="card-header">
                  <div class="card-title mb-2">Sertifikat</div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                      <tr>
                          <td class="font-weight-bold">Sertif 1</td>
                          <td><a target="_blank" href="google.com">SERTIF-001</a></td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Sertif 2</td>
                          <td><a target="_blank" href="google.com">SERTIF-002</a></td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Sertif 3</td>
                          <td><a target="_blank" href="google.com">SERTIF-003</a></td>
                      </tr>
                  </table>
                </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-12 ">
          <div class="card">
              <div class="card-header">
                  <div class="card-title mb-2">Tempat Tinggal</div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                      <tr>
                          <td class="font-weight-bold">Alamat</td>
                          <td>Mojokerto</td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Kota/Kabupaten Asal</td>
                          <td>Kabupaten Mojokerto</td>
                      </tr>
                  </table>
                </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection