<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
                    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                            <div class="max-w-md mx-auto">
                                <div class="flex items-center space-x-5">
                                    <div
                                        class="h-14 w-14 bg-blue-200 rounded-full flex flex-shrink-0 justify-center items-center text-blue-500 text-2xl font-mono">

                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                        <h2 class="leading-relaxed">Edit my profile</h2>
                                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor
                                            sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <br>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                <a href="me">
                                    <img src="images/{{ Session::get('image') }}">
                                </a>
                                @endif

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if (!($message = Session::get('success')))
                                <form class="divide-y divide-gray-200" action="{{ route('change') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div
                                        class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">Image</label>
                                            <input type="file" id="gallery-photo-add" name="image"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Event title">
                                            <div class="gallery pt-2">
                                                <img src="/images/{{ Auth::user()->profile->image }}" alt="" class="w-full rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">About me</label>
                                            <textarea type="text" name="description"
                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="Event title"></textarea>
                                        </div>
                                    </div>
                                    <div class="pt-4 flex items-center space-x-4">
                                        <button
                                            class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg> Cancel
                                        </button>
                                        <button
                                            class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
                                    </div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
