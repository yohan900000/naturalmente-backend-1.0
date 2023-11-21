@php
    $label ??= null;
    $type ??= 'text';
    $name ??= null;
    $value ??= null;
    $placeholder ??= null;
@endphp

<div class="form-group">
    @if($type === 'text')
        <label for="{{ $name }}">{{ $label }}</label>
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
    @elseif($type === 'textarea')
        <label for="{{ $name }}">{{ $label }}</label>
        <textarea id="{{ $name }}" name="{{ $name }}">{{ $value }}</textarea>
    @elseif($type === 'file')
        <label for="{{ $name }}">{{ $label }}</label>
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
    @endif
</div>
