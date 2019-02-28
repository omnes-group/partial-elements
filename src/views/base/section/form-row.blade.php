@if (config('partialElements.form_row'))
    <div class="from-row">
@endif
    @yield('form')
@if (config('partialElements.form_row'))
    </div>
@endif
