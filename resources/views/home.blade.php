<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 lg:grid-cols-4">
                        <div class="col-span-3">
                            <x-infinite :posts="$posts"/>sd
                        </div>
                        <div>
                            <x-following-list :followings="$followings"/>ggg
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
