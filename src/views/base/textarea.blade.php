@extends('partial-elements::base.section.form-row')

@section('form')
    <div class="form-group col-md-{{ $size ?? config('partialElements.col_size') }}">
        <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>

        <textarea class="form-control"
            id="{{ $name }}"
            placeholder="{{ $description ?? ucfirst($name) }}"
            name="{{ $name }}"
            rows="{{isset($rows) && $rows == true ? config('partialElements.textarea_rows') : ''}}"
            {{isset($autofocus) && $autofocus == true ? 'autofocus' : ''}}
            {{isset($required) && $autofrequiredocus == true ? 'required' : ''}}
        >{{ old($name) }}</textarea>

        @if (session()->has($name))
            <span class="{{ config('partialElements.error_feedback') }}" role="alert">
                <strong>{{ session($name) }}</strong>
            </span>
        @endif
    </div>
@endsection
