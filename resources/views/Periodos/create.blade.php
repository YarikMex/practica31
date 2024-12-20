@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    {{-- Si deseas mostrar la tabla aquí --}}
    @include('periodos.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Insertar Periodo</h1>

<form action="{{ route('periodos.store') }}" method="POST">
    @csrf

    <!-- Periodo -->
    <div class="row mb-3">
        <label for="periodo" class="col-sm-2 col-form-label">Periodo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="periodo" name="periodo" required value="{{ old('periodo') }}">
          @error("periodo")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Descripción Corta -->
    <div class="row mb-3">
        <label for="descCorta" class="col-sm-2 col-form-label">Descripción Corta</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="descCorta" name="descCorta" required value="{{ old('descCorta') }}">
          @error("descCorta")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Fecha de Inicio -->
    <div class="row mb-3">
        <label for="FechaIni" class="col-sm-2 col-form-label">Fecha de Inicio</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="FechaIni" name="FechaIni" required value="{{ old('FechaIni') }}">
          @error("FechaIni")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Fecha de Fin -->
    <div class="row mb-3">
        <label for="FechaFin" class="col-sm-2 col-form-label">Fecha de Fin</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="FechaFin" name="FechaFin" required value="{{ old('FechaFin') }}">
          @error("FechaFin")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>

</form>

@endsection
