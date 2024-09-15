<label class="mb-2 block text-sm font-medium text-my-black" for="{{ $for }}">
    {{ $slot }} @if ($required)
    <span>*</span>
    @endif
</label>