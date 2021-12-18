@extends('dashboard.layouts.main')

@section('dashboard')
<div class="container container-fluid">
    <form method="post" action="/pasien">
        @method('put')
        @csrf
        <input type="hidden" name="user_id" value="{{  auth()->user()->id }}">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') 
          is-invalid 
          @enderror" id="nama" name="nama" value="{{ old('nama', $pasiens[0]->nama) }}">
          @error('nama')
          <div class="invalid-feedback">
              {{  $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="lokasi" class="form-label">Lokasi</label>
          <input type="lokasi" class="form-control @error('lokasi') 
          is-invalid 
          @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi', $pasiens[0]->lokasi) }}">
          @error('lokasi')
          <div class="invalid-feedback">
              {{  $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection