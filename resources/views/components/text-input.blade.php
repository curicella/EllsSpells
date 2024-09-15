@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-my-black bg-my-black text-my-lilac focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
