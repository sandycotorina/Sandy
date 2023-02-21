@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Data</p>
        <p style="margin-left: 5px;">/Satuan</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <form>
                    <div class="form-group">
                        <label for="exampleformControlInput1">Nama Satuan</label>
                        <input type="email" class="form-control" id="exampleControlInput" placeholder="">
                        <button type="submit" class="btn btn-outline-primary mt-4">
                            Simpan Satuan
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Satuan</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


