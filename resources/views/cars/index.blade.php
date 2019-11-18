@extends('layout/main')
@section('title', 'Daftar Mobil')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1 class="mt-3">Daftar Mobil</h1>

        <a href="/cars/create" class='btn btn-sm btn-primary my-3'>Tambah Data Mobil</a>
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

           <table id="table-datatables" class="table table-hover table-sm">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Make</th>
                  <th scope="col">Model</th>
                  <th scope="col">Produced on</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead >
                <tbody>
                  
                    @foreach ($cars as $car) 
                    <tr>
                        <td>{{ $car->id}}</td>
                        <td>{{ $car->make}}</td>
                        <td>{{ $car->model}}</td>
                        <td>{{ $car->produced_on}}</td>
                        <td>{{ $car->email}}</td>
                        <td>
                            <a href="/cars/{{ $car->id }}/edit" class="btn btn-sm btn-warning" class="in-line">Edit</a>
                          
                            <form action="/cars/{{ $car->id }}" method="post" class=d-inline>
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" class="in-line" onclick="return confirm('Hapus data ini?')">Delete</button>
                            </form>

                            <form action="{{ route('cars.default', $car) }}" method="post" class=d-inline>
                            @method('patch')
                            @csrf
                            
                            <button type="submit" class="btn btn-sm btn-info" class="in-line" onclick="return confirm('data ini akan menjadi default anda yakin?')">Default</button>
                            </form>

                          
                        </td>
                    </tr>
                    @endforeach 

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
