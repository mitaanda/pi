@extends('layouts.app')

@section('content')
<section class="page-users-view">
  <div class="row">
      <div class="col-12">
        <a href="{{ route('pplp.atlet.edit') }}" class="btn btn-primary mr-1 mb-1"><i class="feather icon-edit-1"></i> Edit</a>
          <div class="card">
              <div class="card-header">
                  <div class="card-title">Detail Data Atlet PPLP</div>
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
                                  <td class="font-weight-bold">Akta Kelahiran</td>
                                  <td><a target="_blank" href="google.com">AKTA-KELAHIRAN</a></td>
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
                  <div class="card-title mb-2">Sekolah & Ijazah</div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                      <tr>
                          <td class="font-weight-bold">Nama</td>
                          <td>SMKN 2 Mojokerto
                          </td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Kelas</td>
                          <td>XI RPL</td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">NISN</td>
                          <td>0007191417</td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Ijazah SD/Sederajat</td>
                          <td><a target="_blank" href="google.com">IJAZAH-SD</a></td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Ijazah SMP/Sederajat</td>
                          <td><a target="_blank" href="google.com">IJAZAH-SMP</a></td>
                      </tr>
                      <tr>
                          <td class="font-weight-bold">Ijazah SMA/Sederajat</td>
                          <td><a target="_blank" href="google.com">IJAZAH-SMA</a></td>
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

      <div class="col-12">
          <div class="card">
              <div class="card-header border-bottom mx-2 px-0">
                  <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Kejuaraan
                  </h6>
              </div>
              <div class="card-body px-75">
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
                        </tr>
                    </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
      
  </div>
</section>
@endsection