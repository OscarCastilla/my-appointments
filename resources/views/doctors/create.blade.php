@extends('layouts.panel')

@section('content')

    


<div class="row">
    <div class="col-md-12 mb-4">
        
    </div>
 
   
  </div>
  <div class="card">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nuevo Medico</h3>
        </div>
        <div class="col text-right">
          <a href="{{url('doctors')}}" class="btn btn-sm btn-default">

           Cancelar y volver
          </a>
        </div>
      </div>
    </div>
      <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}} </li> 
            @endforeach
            </ul>
        </div>
            
        @endif


        <form action="{{url('doctors')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre del medico</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{old('dni')}}" required>
            </div>
            <div class="form-group">
                <label for="DNI">DNI</label>
                <input type="text" name="dni" class="form-control" value="{{old('name')}}" required>
            </div>

            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="address" class="form-control" value="{{old('name')}}" required>
            </div>
    
            <div class="form-group">
                <label for="phone">Telefono</label>
                <input type="text" name="phone" class="form-control" value="{{old('description')}}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
    
        </form> 
      </div>
  </div>
@endsection
