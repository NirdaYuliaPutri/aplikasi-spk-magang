@extends('dashboard.layouts.main')

@section('dashboard')
<div class="container container-fluid d-flex justify-content-center mb-3">
</h2 class="text-uppercase h1 text-bold"> Data Pasien</h2>
</div>
    <div class="container container-fluid">
    <table class="table table-danger table-striped">
        <tbody>
        <tr>
            <th scope="row">Nama</th>
            <td>{{ $pasiens[0]->nama }}</td>
        </tr>
        <tr>
            <th scope="row">Lokasi</th>
            <td>{{ $pasiens[0]->lokasi }}</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container d-flex justify-content-center">
    <a href="/pasien"class="btn btn-danger">Back</a>
</div>
@endsection
    