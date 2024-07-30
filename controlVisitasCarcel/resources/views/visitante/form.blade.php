<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_completo" class="form-label">{{ __('Nombrecompleto') }}</label>
            <input type="text" name="nombreCompleto" class="form-control @error('nombreCompleto') is-invalid @enderror" value="{{ old('nombreCompleto', $visitante?->nombreCompleto) }}" id="nombre_completo" placeholder="Nombrecompleto">
            {!! $errors->first('nombreCompleto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cedula" class="form-label">{{ __('Cedula') }}</label>
            <input type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{ old('cedula', $visitante?->cedula) }}" id="cedula" placeholder="Cedula">
            {!! $errors->first('cedula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="relacion_prisionero" class="form-label">{{ __('Relacionprisionero') }}</label>
            <input type="text" name="relacionPrisionero" class="form-control @error('relacionPrisionero') is-invalid @enderror" value="{{ old('relacionPrisionero', $visitante?->relacionPrisionero) }}" id="relacion_prisionero" placeholder="Relacionprisionero">
            {!! $errors->first('relacionPrisionero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>