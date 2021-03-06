<div class="alert alert-primary" role="alert">
    Los campos con asteriscos (*) son obligatorios
  </div>

<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label text-right font-weight-bold">Nombre completo *</label>
    <div class="col-sm-10">

        <input type="text" class="form-control @if ($errors->has('nombre')) is-invalid @endif" id="nombre" name="nombre"
            value="{{ old('nombre', $empleado->nombre ?? '') }}" placeholder="Nombre completo del empleado">

        @if ($errors->has('nombre'))<div class="invalid-feedback">{{ $errors->first('nombre') }}</div>@endif
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right font-weight-bold">Correo electrónico
        *</label>
    <div class="col-sm-10">
        <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email"
            placeholder="Correo electrónico" value="{{ old('email', $empleado->email ?? '') }}">
        @if ($errors->has('email'))<div class="invalid-feedback">{{ $errors->first('email') }}</div>@endif
    </div>
</div>


<fieldset class="form-group">
    <div class="row">
        <legend class="col-form-label col-sm-2 pt-0 text-right font-weight-bold">Sexo *</legend>
        <div class="col-sm-10 radio-group ">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="maculino" value="M"
                    {{ old('sexo', $empleado->sexo ?? '') == 'M' ? 'checked' : '' }}>
                <label class="form-check-label" for="maculino">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="femenino" value="F"
                    {{ old('sexo', $empleado->sexo ?? '') == 'F' ? 'checked' : '' }}>
                <label class="form-check-label" for="femenino">
                    Femenino
                </label>
            </div>
            @if ($errors->has('sexo'))<small class="text-danger">{{ $errors->first('sexo') }}</small>@endif
        </div>

    </div>
</fieldset>

<div class="form-group row">
    <label for="area_id" class="col-sm-2 col-form-label text-right font-weight-bold">Área *</label>
    <div class="col-sm-10">
        <select class="form-control" id="area_id" name="area_id">
            @foreach ($areas as $area)
                <option {{ old('area_id', $empleado->area_id ?? null) == $area->id ? 'selected' : '' }}
                    value="{{ $area->id }}">{{ $area->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label text-right font-weight-bold">Descripción
        *</label>
    <div class="col-sm-10">
        <textarea class="form-control @if ($errors->has('descripcion')) is-invalid @endif" id="descripcion" name="descripcion" rows="3"
            placeholder="Descripción de la experiencia del empleado">{{ old('descripcion', $empleado->descripcion ?? '') }}</textarea>
        @if ($errors->has('descripcion'))<div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>@endif
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label text-right font-weight-bold"> </label>
    <div class="col-sm-10">

        <div class="form-check">
            <input type="hidden" name="boletin" value="0" />

            <input class="form-check-input" type="checkbox" id="boletin" name="boletin" value="1"
                {{ old('boletin') ?? ($empleado->boletin ?? '' == 1) ? 'checked' : '' }}>
            <label class="form-check-label" for="boletin">
                Deseo recibir boletín informativo

            </label>
        </div>


    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label text-right font-weight-bold">Roles *</label>
    <div class="col-sm-10 checkbox-group ">

        @foreach ($roles as $rol)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $rol->id }}"
                    id="rol{{ $loop->index }}" name="roles[]"
                    {{ (is_array(old('roles') ?? ($roles_empleado ?? [])) and in_array($rol->id, old('roles') ?? ($roles_empleado ?? []))) ? ' checked' : '' }}>
                <label class="form-check-label" for="rol{{ $loop->index }}">
                    {{ $rol->nombre }}
                </label>
            </div>



        @endforeach

        @if ($errors->has('roles'))<small class="text-danger">{{ $errors->first('roles') }}</small>@endif

    </div>
</div>
