@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Transaksi<p>
        <p style="margin-left: 5px;">/ Barang Keluar</p>
    </div>
<table class="table" style="margin-top: 5%">
    <thead>
      <tr>
        <th scope="col">Refrensi</th>
        <th scope="col">Supplier</th>
        <th scope="col">Status </th>
        <th scope="col">Tanggal</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
  </table>
@endsection
