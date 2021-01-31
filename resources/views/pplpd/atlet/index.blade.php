@extends('layouts.app')

@section('content')
<section id="horizontal-vertical">
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Atlet PPLPD</h4>
                    <div class="card-subtitle float-right">
                        <a class="btn btn-outline-primary" href="{{ route('pplpd.atlet.create') }}"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table nowrap scroll-horizontal-vertical">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Kota/Kab</th>
                                        <th>Cabor</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="{{ route('pplpd.atlet.show') }}">Mita Anda Rista</a></td>
                                        <td>Perempuan</td>
                                        <td>Kab Mojokerto</td>
                                        <td>Renang</td>
                                        <td>
                                            <form action="#" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('pplpd.kejuaraan.create') }}" class="btn btn-outline-warning btn-sm"><i class="fa fa-plus"></i> Kejuaraan</a>
                                                <a href="{{ route('pplpd.atlet.edit') }}" class="btn btn-outline-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                <button type="submit" class="btn btn-outline-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i> Hapus</button> 
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Alvieto Muhammad Haykal Fitra</td>
                                        <td>Laki-laki</td>
                                        <td>Kab Jombang</td>
                                        <td>Renang</td>
                                        <td>
                                            <form action="#" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('pplpd.kejuaraan.create') }}" class="btn btn-outline-warning btn-sm"><i class="fa fa-plus"></i> Kejuaraan</a>
                                                <a href="{{ route('pplpd.atlet.edit') }}" class="btn btn-outline-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                <button type="submit" class="btn btn-outline-danger btn-sm btn-delete"><i class="fa fa-trash-o"></i> Hapus</button> 
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
</section>
@endsection