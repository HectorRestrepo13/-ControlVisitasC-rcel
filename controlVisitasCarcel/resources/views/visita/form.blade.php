<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="prisonero_id" class="form-label">{{ __('Prisonero Id') }}</label>
            <input type="text" name="prisonero_id" class="form-control @error('prisonero_id') is-invalid @enderror" value="{{ old('prisonero_id', $visita?->prisonero_id) }}" id="prisonero_id" placeholder="Prisonero Id">
            {!! $errors->first('prisonero_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="visitantes_id" class="form-label">{{ __('Visitantes Id') }}</label>
            <input type="text" name="visitantes_id" class="form-control @error('visitantes_id') is-invalid @enderror" value="{{ old('visitantes_id', $visita?->visitantes_id) }}" id="visitantes_id" placeholder="Visitantes Id">
            {!! $errors->first('visitantes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="inicio_visita" class="form-label">{{ __('Iniciovisita') }}</label>
            <input type="text" name="InicioVisita" class="form-control @error('InicioVisita') is-invalid @enderror" value="{{ old('InicioVisita', $visita?->InicioVisita) }}" id="inicio_visita" placeholder="Iniciovisita">
            {!! $errors->first('InicioVisita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fin_visita" class="form-label">{{ __('Finvisita') }}</label>
            <input type="text" name="finVisita" class="form-control @error('finVisita') is-invalid @enderror" value="{{ old('finVisita', $visita?->finVisita) }}" id="fin_visita" placeholder="Finvisita">
            {!! $errors->first('finVisita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="guardia_id" class="form-label">{{ __('Guardia Id') }}</label>
            <input type="text" name="guardia_id" class="form-control @error('guardia_id') is-invalid @enderror" value="{{ old('guardia_id', $visita?->guardia_id) }}" id="guardia_id" placeholder="Guardia Id">
            {!! $errors->first('guardia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>