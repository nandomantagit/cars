@extends('layout/main')
@section('title', 'Form Tambah Data Mobil')

@section('container')
       <div class="container">
            <div class="row">
                <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Mobil</h1>

                <form method="post" action="/cars">
                  @csrf
                  <div class="form-group">
                    <label for="make">Make</label>
                    <input type="text" class="form-control @error('make') is-invalid @enderror" id="make" placeholder="Masukkan make" name="make" value={{old('make')}}>  
                    @error('make')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" placeholder="Masukkan Model" name="model" value={{old('model')}}>
                    @error('model')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="produced_on">Produced on</label>
                    <input type="date" class="form-control @error('produced_on') is-invalid @enderror" id="produced_on" placeholder="Masukkan Produced on" name="produced_on" value={{old('produced_on')}}>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value={{old('email')}}>
                  </div>
                  <button type="sumbit" class="btn btn-primary">Tambah Data!</button>
                </form>

                </div>
            </div>
        </div>
@endsection
