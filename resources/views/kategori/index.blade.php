@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/ Katagori</p>
    </div>
    @role('gudang')
    <div class="row">
        <div class="col-md-5">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('kategori.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Simpan Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categorys as $category)
                                <tr>
                                    <td>{{$category->no_reg}}</td>
                                    <td>{{$category->nama}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            <a href="#" onclick="showForm('answer1', 'text1', this); return false;" class="btn btn-outline-warning btn-sm">Edit Kategori</a>
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Kategori</button>
                                        </form>
                                    </td>
                                    <td>
                                        <span id="answer1" style="display: none;">
                                            <textarea rows="10" cols="115"></textarea>
                                        </span>


                                    </td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endrole

    @role('pimpinan')
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>KTG/20220403/001</td>
                                    <td>Makanan Kemasan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endrole
</div>

@endsection
