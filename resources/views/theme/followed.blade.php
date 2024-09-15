<x-app-layout> 

    <div>
        @auth   
            <h3 class="text-2xl font-medium my-6">Topics you follow:</h3>
            @if ($followedThemes->count() > 0)
                @foreach ($followedThemes as $theme)
                <x-theme-card class="mb-4" :$theme>
                    <x-link-button :href="route('theme.show', $theme)">
                        See details
                    </x-link-button>
                </x-theme-card>
                @endforeach
            @else
            <p class="text-lg">You haven't followed any topics yet.</p>
            @endif
        @endauth
    </div>
</x-app-layout>