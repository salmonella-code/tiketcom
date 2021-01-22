@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<form action="">
    <div class="form-group">
        <label for="exampleFormControlInput1">Maskapai</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Maskapai">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Logo Maskapai</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
</form>

<div class="card">
    <div class="table-responsive p-3">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Maskapai</th>
                    <th>Deskripsi</th>
                    <th>Logo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>123</td>
                    <td>1234</td>
                    <td>23</td>
                </tr>
            </tbody>
        </table>
</div>

@endsection