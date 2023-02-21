@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center">
        <div style="margin-left: 2px; font-weight: bold;">Transaksi</div>
        <div style="margin-left: 5px;">/ Barang Masuk</div>
        <button type="button" style="margin-left: 2%" class="btn btn-outline-primary">
            Tambah Stock Baru
        </button>
    </div>
    <div class="alert alert-danger" style="margin-top: 3%" role="alert">
       Request Barang Akan Masuk Kedalam Table Dibawah Ini
      </div>
<table class="table" style="margin-top: 2%">
    <thead>
      <tr>
        <th scope="col">Refrensi</th>
        <th scope="col">Status </th>
        <th scope="col">Jumlah Permintaan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
  </table>
@endsection
