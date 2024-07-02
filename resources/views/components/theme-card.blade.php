<x-card class="mb-4 bg-opacity-70 w-[500px]">
    <div class="flex items-center space-x-4 mb-4">
        <img src="{{ $theme->user->avatar }}" alt="{{ $theme->user->name }}" class="w-10 h-10 rounded-full">
        <div>
            <h3 class="font-semibold">{{ $theme->user->name }}</h3>
            <p class="text-gray-600 text-sm">
                @if($theme->created_at)
                    {{ $theme->created_at->diffForHumans() }}
                @else
                    
                @endif
            </p>
        </div>
    </div>

    <h2 class="mb-4 text-xl text-my-brown-2 font-semibold">{{ $theme->name }}</h2>

    <p class="mb-4 text-gray-600">{{ $theme->description }}</p>

    {{ $slot }}
</x-card>