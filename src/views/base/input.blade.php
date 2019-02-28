@extends('partial-elements::base.section.form-row')

@section('form')
    <div class="form-group col-md-{{ $size ?? config('partialElements.col_size') }}">
        <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>

        <input type="{{ $type ?? config('partialElements.input_type')}}"
            class="form-control {{ session()->has($name) ? config('partialElements.error_class') : '' }}"
            id="{{ $name }}"
            placeholder="{{ $description ?? ucfirst($name) }}"
            name="{{ $name }}"
            value="{{ old($name) }}"
            {{isset($autofocus) && $autofocus == true ? 'autofocus' : ''}}
            {{isset($required) && $autofrequiredocus == true ? 'required' : ''}}
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
@endsection