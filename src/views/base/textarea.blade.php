@include('partial-elements::base.partials.open-form-row')
    <div class="form-group col-md-{{ $size ?? config('partialElements.col_size') }}">
        <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>

        <textarea class="form-control"
            id="{{ $name }}"
            placeholder="{{ $placeholder ?? $description ?? ucfirst($name) }}"
            name="{{ $name }}"
            rows="{{isset($rows) ? $rows : config('partialElements.textarea_rows')}}"
            {{isset($autofocus) && $autofocus == true ? 'autofocus' : ''}}
            {{isset($required) && $autofrequiredocus == true ? 'required' : ''}}
            {{isset($disabled) && $disabled == true ? 'disabled' : ''}}
        >
            {{ old($name) ?? isset($value) ? $value : '' }}
        </textarea>

        @if (session()->has($name))
            <span class="{{ config('partialElements.error_feedback') }}" role="alert">
                <strong>{{ session($name) }}</strong>
            </span>
        @endif
    </div>
@include('partial-elements::base.partials.close-form-row')
