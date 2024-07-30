@extends('layouts.app')

@section('template_title')
    {{ $pricionero->name ?? __('Show') . " " . __('Pricionero') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pricionero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pricioneros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombrecompleto:</strong>
                            {{ $pricionero->nombreCompleto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fechanacimiento:</strong>
                            {{ $pricionero->fechaNacimiento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fechaingreso:</strong>
                            {{ $pricionero->fechaIngreso }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Delitocometido:</strong>
                            {{ $pricionero->delitoCometido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Celdaasignada:</strong>
                            {{ $pricionero->celdaAsignada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
