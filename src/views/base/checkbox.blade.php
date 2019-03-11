@include('partial-elements::base.partials.open-form-row')
    <div class="form-group col-md-{{ $size ?? config('partialElements.col_size') }}">
        @if (isset($type) && $type != 'hidden' || !isset($type)) 
            <label class="form-check-label" for="{{ $name }}">{{ __($description ?? ucfirst($name)) }}</label>
        @endif

        <div class="funkyradio" style="margin-top:-35px">
            <div class="funkyradio-{{$color ?? config('partialElements.checkbox_color') ?? 'default'}}">
                <input type="checkbox" name="{{$name}}" id="{{$name}}"
                    {{isset($checked) && $checked == true ? 'checked' : ''}}
                />
                <label for="{{$name}}">{{$short ?? $description ?? $name}}</label>
            </div>
        </div>

        @if (session()->has($name))
            <span class="{{ config('partialElements.error_feedback') }}" role="alert">
                <strong>{{ session($name) }}</strong>
            </span>
        @endif
    </div>
@include('partial-elements::base.partials.close-form-row')
