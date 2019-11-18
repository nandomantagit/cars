@extends('layout/main')
@section('title', 'Form Ubah Data Mobil')

@section('container')
       <div class="container">
            <div class="row">
                <div class="col-8">
                <h1 class="mt-3">Form Ubah Data Mobil</h1>

                <form method="post" action="/cars/{{ $car->id }}">
                    @method('patch')
                  @csrf
                  <div class="form-group">
                    <label for="make">Make</label>
                    <input type="text" class="form-control @error('make') is-invalid @enderror" id="make" placeholder="Masukkan Make" name="make" value="{{ $car->make}}">  
                    @error('make')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" placeholder="Masukkan Model" name="model" value="{{ $car->model}}">
                    @error('model')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="produced_on">Produced on</label>
                    <input type="text" class="form-control @error('produced_on') is-invalid @enderror" id="produced_on" placeholder="Masukkan produced on" name="produced_on" value="{{ $car->produced_on}}">
                  </div>
                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ $car->email}}">
                  </div>
                  <button type="sumbit" class="btn btn-primary">Ubah Data!</button>

                  <a href="/cars" class="btn btn-info">Batal</a>
                </form>

                </div>
            </div>
        </div>
@endsection
