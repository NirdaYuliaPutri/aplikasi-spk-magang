@extends('dashboard.layouts.main')

@section('dashboard')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-center">
        <a href="/pasien/create" class="btn btn-success mb-3 me-lg-3"><i class="mdi mdi-account-plus"></i></a>
        <div class="col-lg-6">
            <form action="/pasien">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search" name="search" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container container-fluid">
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pasiens as $pasien)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pasien->nama }}</td>
                <td>Show|Update|Delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $pasiens->links() }}
    </div>
@endsection