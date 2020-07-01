@extends('layouts.layout')

@section('title','Estudiantes registrados')
@section('content')

<!-- MDBootstrap Datatables  -->

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    Estudiantes registrados
                    </div>
                    <div class="card-body">

                    <div class="row">
         <a href="{{route('estudiantes.crear')}}" class="btn btn-success"> Crear Estudiante</a>
                 </div>


                 <div class="row">

                 <table class="table">

                 <thead class="thead-light">
                     <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Fecha Creación</th>
                        <th scope="col">Última actualización</th>
                        <th scope="col" colspan="5">Acciones</th>

                    </tr>

                 </thead>
                 <tbody>

                       @foreach($estudiantes as $estudiante)
                        <tr>
                       <td>{{ $estudiante->id }}</td>
                       <td>{{ $estudiante->codigo }}</td>
                       <td>{{ $estudiante->nombres }}</td>
                       <td>{{ $estudiante->apellidos }}</td>
                       <td>{{ $estudiante->created_at->diffforhumans()}}</td>
                       <td>{{ $estudiante->updated_at->diffforhumans()}}</td>
                         <td><a class="btn btn-warning"
                        href="{{route('estudiantes.editar',$estudiante)}}">Editar </a></td>
                        <td>
                        <form method="POST" action="{{ route('estudiantes.eliminar',$estudiante) }}">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger md" type="submit">Eliminar</button>
                        </form>
                    </td>
                    <td>
                    <a  class="btn btn-info md" href="{{ route('estudiantes.mostrar',$estudiante)}}">Detalles</a>



                    </td>


                    </tr>

                       @endforeach



                 </tbody>

                 </table>

                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
