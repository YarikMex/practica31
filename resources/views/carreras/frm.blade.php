@extends('inicio2')

@section('contenido1')
    @include('carreras.tablahtml')
@endsection

@section('contenido2')
    <h1>{{ $accion == 'C' ? 'Insertar Carrera' : ($accion == 'E' ? 'Editar Carrera' : 'Eliminar Carrera') }}</h1>

    <form action="{{ $accion == 'C' ? route('carreras.store') : ($accion == 'E' ? route('carreras.update', $carrera->id) : route('carreras.destroy', $carrera)) }}" method="POST">
        @csrf

        <!-- Nombre de la Carrera -->
        <div class="row mb-3">
            <label for="nombreCarrera" class="col-sm-2 col-form-label">Nombre de la Carrera</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" required value="{{ old('nombreCarrera', $carrera->nombreCarrera ?? '') }}" {{ $des }}>
              @error("nombreCarrera")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Mediano -->
        <div class="row mb-3">
            <label for="nombreMediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" required value="{{ old('nombreMediano', $carrera->nombreMediano ?? '') }}" {{ $des }}>
              @error("nombreMediano")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Corto -->
        <div class="row mb-3">
            <label for="nombreCorto" class="col-sm-2 col-form-label">Nombre Corto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" required value="{{ old('nombreCorto', $carrera->nombreCorto ?? '') }}" {{ $des }}>
              @error("nombreCorto")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Departamento -->
        <div class="row mb-3">
            <label for="depto_id" class="col-sm-2 col-form-label">Departamento</label>
            <div class="col-sm-10">
              <select class="form-select" id="depto_id" name="depto_id" required {{ $des }}>
                @foreach ($deptos as $depto)
                  <option value="{{ $depto->idDepto }}" {{ old('depto_id', $carrera->depto_id ?? '') == $depto->idDepto ? 'selected' : '' }}>{{ $depto->nombredepto }}</option>
                @endforeach
              </select>
              @error("depto_id")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
            </div>
        </div>
    </form>
@endsection
