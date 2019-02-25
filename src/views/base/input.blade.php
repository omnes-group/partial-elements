<div class="form-group col-md-{{ $size ?? '4' }}">
    <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>

    <input type="{{ $type ?? 'text'}}"
        class="form-control{{ session()->has($name) ? ' is-invalid' : '' }}"
        id="{{ $name }}"
        placeholder="{{ $description ?? ucfirst($name) }}"
        name="{{ $name }}"
        value="{{ old($name) }}"
        {{isset($autofocus) && $autofocus == true ? 'autofocus' : ''}}
        {{isset($required) && $autofrequiredocus == true ? 'required' : ''}}
    >

    @if (session()->has($name))
        <span class="invalid-feedback" role="alert">
            <strong>{{ session($name) }}</strong>
        </span>
    @endif
</div>
