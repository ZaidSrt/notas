@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{ route('notas.index') }}" class="btn btn-danger text-normal">Volver</a>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 my-3">
                <form action="{{ route('notas.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="card">
                        <div class="card-header bg-gray">
                            <span class="text-medium text-bold">Nueva nota</span>
                        </div>
                        <div class="container-fluid my-3 text-normal">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="titulo">Titulo</label>
                                    <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid input-err @enderror" value="{{ old('titulo') }}">
                                    @error('titulo')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="nota">Nota</label>
                                    <textarea name="nota" id="nota" rows="5" class="form-control resize-none @error('nota') is-invalid input-err @enderror"></textarea>
                                    @error('nota')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success text-normal w-100">Crear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection