<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_completo" class="form-label">{{ __('Nombrecompleto') }}</label>
            <input type="text" name="nombreCompleto" class="form-control @error('nombreCompleto') is-invalid @enderror" value="{{ old('nombreCompleto', $pricionero?->nombreCompleto) }}" id="nombre_completo" placeholder="Nombrecompleto">
            {!! $errors->first('nombreCompleto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fechanacimiento') }}</label>
            <input type="text" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento', $pricionero?->fechaNacimiento) }}" id="fecha_nacimiento" placeholder="Fechanacimiento">
            {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_ingreso" class="form-label">{{ __('Fechaingreso') }}</label>
            <input type="text" name="fechaIngreso" class="form-control @error('fechaIngreso') is-invalid @enderror" value="{{ old('fechaIngreso', $pricionero?->fechaIngreso) }}" id="fecha_ingreso" placeholder="Fechaingreso">
            {!! $errors->first('fechaIngreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="delito_cometido" class="form-label">{{ __('Delitocometido') }}</label>
            <input type="text" name="delitoCometido" class="form-control @error('delitoCometido') is-invalid @enderror" value="{{ old('delitoCometido', $pricionero?->delitoCometido) }}" id="delito_cometido" placeholder="Delitocometido">
            {!! $errors->first('delitoCometido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celda_asignada" class="form-label">{{ __('Celdaasignada') }}</label>
            <input type="text" name="celdaAsignada" class="form-control @error('celdaAsignada') is-invalid @enderror" value="{{ old('celdaAsignada', $pricionero?->celdaAsignada) }}" id="celda_asignada" placeholder="Celdaasignada">
            {!! $errors->first('celdaAsignada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>