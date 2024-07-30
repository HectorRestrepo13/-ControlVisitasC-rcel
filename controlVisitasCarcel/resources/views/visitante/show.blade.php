@extends('layouts.app')

@section('template_title')
    {{ $visitante->name ?? __('Show') . " " . __('Visitante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Visitante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('visitantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombrecompleto:</strong>
                            {{ $visitante->nombreCompleto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cedula:</strong>
                            {{ $visitante->cedula }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Relacionprisionero:</strong>
                            {{ $visitante->relacionPrisionero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
