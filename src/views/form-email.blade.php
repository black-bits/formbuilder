<div class='form-group {{ $errors->has($name) ? 'has-error' : '' }}'>
    <label for='{{ $name }}'>{{ $label }}</label>
    <input
            type='email'
            class='form-control'
            id='{{ $name }}'
            name='{{ $name }}'
            placeholder='{{ $placeholder }}'
            value='{{ $value }}'
            {{ $readonly ? 'readonly' : '' }}
            {{ $disabled ? 'disabled' : '' }}
    />
    @if ($errors->has($name))
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>