@extends('filament::layouts.field-group')

@section('field')
    <textarea 
        id="{{ $id ?? $model }}"
        {{ $modelDirective }}="{{ $model }}"
        @foreach ($extraAttributes as $attribute => $value)
            {{ $attribute }}="{{ $value }}"
        @endforeach
        class="block w-full rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error($model) border-red-600 motion-safe:animate-shake @else border-gray-300 @enderror">
        {{ $value }}
    </textarea>
@overwrite