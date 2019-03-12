@include('partial-elements::base.partials.open-form-row')
    <div class="form-group col-md-{{ $size ?? config('partialElements.col_size') }}">
        <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>

        <select class="form-control {{ session()->has($name) ? config('partialElements.error_class') : '' }}"
            id="{{ $name }}"
            name="{{ $name }}"
            {{isset($autofocus) && $autofocus == true ? 'autofocus' : ''}}
            {{isset($required) && $required == true ? 'required' : ''}}
            {{isset($disabled) && $disabled == true ? 'disabled' : ''}}
        >
            @if(isset($items))
                @foreach($items as $item)
                    <option
                        value="{{ $item['value'] }}"
                        {{ (isset($selected) && $item['value'] == $selected ? "selected":"") }}
                    >
                        {{ __($item['description'] ?? ucfirst($item['name'])) }}
                    </option>
                @endforeach
            @endif
        </select>

        @if (session()->has($name))
            <span class="{{ config('partialElements.error_feedback') }}" role="alert">
                <strong>{{ session($name) }}</strong>
            </span>
        @endif
    </div>
@include('partial-elements::base.partials.close-form-row')
