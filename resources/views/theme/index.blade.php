<x-app-layout>
    <div class="flex items-center justify-between w-full">

        @can('create', App\Models\Theme::class)
        <x-link-button class="text-base" :href="route('theme.create')">
            Create a new theme
        </x-link-button>
        @endcan
    </div>

    
    @auth
    <h3 class="text-2xl font-medium my-6">Explore new Theme</h3>
    @foreach ($themes->reject(fn ($theme) => ($userFollowedThemes->contains($theme))) as $theme)
    <x-theme-card class="mb-4" :$theme>
        <x-link-button :href="route('theme.show', $theme)">
            See details
        </x-link-button>
    </x-theme-card>
    @endforeach
    @else
    @foreach ($themes->sortByDesc('updated_at') as $theme)
    <x-theme-card class="mb-4" :$theme>
        <x-link-button :href="route('theme.show', $theme)">
            See details
        </x-link-button>
    </x-theme-card>
    @endforeach
    @endauth
</x-app-layout>