@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="matgin-left: 2px; font-weight: bold;">Rak Barang</p>
        <p style="margin-left: 5px;">/ Index</p>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode Categorys</th>
                        <th>Kode Brand</th>
                        <th>Kode Satuan</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stock</th>
                        @role('customer')
                            <th>Oprions</th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barangs as $barang)
                        <tr>

                            <td>{{$barang->category->no_reg}}</td>
                            <td>{{$barang->brand->no_reg}}</td>
                            <td>{{$barang->satuan->no_reg}}</td>
                            <td>{{$barang->no_reg}}</td>
                            <td>{{$barang->nama}}</td>
                            <td>{{$barang->quantity}}</td>
                            @role('customer')
                                <td>
                                    <a href="{{route('master-barang.request', $barang->id)}}" class="btn btn-outline-warning btn-sm">
                                        Buat Permintaan
                                    </a>
                                </td>
                            @endrole
                        </tr>
                    @empty

                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
