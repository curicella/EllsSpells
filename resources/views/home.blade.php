<x-app-layout>
    <div class="h-[650px] bg-cover bg-no-repeat" style="background-image: url('/images/Winged Victory Of Samothrace2.png');">
        <div class="flex items-start justify-center pt-5 h-full">
            {{-- <h1 class="text-white font-palatino text-4xl">Let's talk Art!</h1> --}}
        </div>
        <div class="flex justify-center items-center bg-my-brown text-my-beige hover:bg-my-brown-3 hover:bg-opacity-85 focus:outline-none focus:bg-my-brown-3 transition duration-250 ease-in-out w-250 h-full pt-5">
            <div>
                <h1 class="text-white font-palatino text-4xl">Let's talk Art!</h1>
                <a href="{{ route('theme.index') }}">Go to Themes -></a>
            </div>

        </div>

    </div>
</x-app-layout>