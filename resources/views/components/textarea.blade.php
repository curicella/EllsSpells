@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-my-beige bg-my-beige text-my-brown-2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}></textarea>