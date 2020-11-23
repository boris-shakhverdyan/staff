@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-textarea shadow-sm rounded-md']) !!}></textarea>