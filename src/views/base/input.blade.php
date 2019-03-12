@include('partial-elements::base.partials.open-form-row')
    <div class="form-group col-md-{{ $size ?? config('partialElements.col_size') }}">
        @if (isset($type) && $type != 'hidden' || !isset($type)) 
            <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>
        @endif

        <input type="{{ $type ?? config('partialElements.input_type')}}"
            class="form-control {{ session()->has($name) ? config('partialElements.error_class') : '' }}"
            id="{{ $name }}"
            placeholder="{{$placeholder ?? $description ?? ucfirst($name) }}"
            name="{{ $name }}"
            value="{{ old($name) ?? isset($value) ? $value : '' }}"
            {{isset($autofocus) && $autofocus == true ? 'autofocus' : ''}}
            {{isset($required) && $required == true ? 'required' : ''}}
            {{isset($disabled) && $disabled == true ? 'disabled' : ''}}
            @if(isset($type) && $type == 'number')
                @include('partial-elements::base.number')
            @endif
        >

        @if (session()->has($name))
            <span class="{{ config('partialElements.error_feedback') }}" role="alert">
                <strong>{{ session($name) }}</strong>
            </span>
        @endif
    </div>
@include('partial-elements::base.partials.close-form-row')
