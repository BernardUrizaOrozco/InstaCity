<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="flex justify-center">
            @if($post)
                <x-insta :post="$post" />
            @endif
        </div>
    </div>
</x-app-layout>
