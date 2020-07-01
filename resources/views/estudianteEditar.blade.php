@extends('layouts.layout')

@section('title','Estudiantes registrados')


@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    Estudiantes registrados
                    </div>
                    <div class="card-body">

                    <form class="needs-validation" novalidate method="POST" action="{{ route('estudiantes.actualizar',$estudiante) }}">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                        <div class="col">
                            <label for="codigo">Codigo</label>
                        <input type="text" class="form-control is-valid" id="codigo" name="codigo"  value="{{ $estudiante->codigo }}" required>
                            <div class="valid-feedback">
                              Ok!
                            </div>
                        </div>
                        <div class="col">

                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control is-valid" id="nombres" name="nombres"  value="{{ $estudiante->nombres }}" required>
                            <div class="valid-feedback">
                              Ok!
                            </div>

                        </div>
                     </div>

                     <div class="row">
                        <div class="col">


                            <label for="apellidos"></label>
                            <input type="text" class="form-control is-valid" id="apellidos" name="apellidos" value="{{ $estudiante->apellidos }}" required>
                            <div class="valid-feedback">
                              Ok!
                            </div>

                        </div>
                        <div class="col">
                                <div>&nbsp;</div>
                      <button class="btn btn-primary" type="submit">Actualizar</button>

                        </div>
                     </div>




                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
