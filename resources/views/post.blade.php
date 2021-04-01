<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="flex justify-center">
            <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
                <div class="w-full flex justify-between p-3">
                    <div class="flex">
                        <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/{!! $post->image !!}" alt="profilepic">
                        </div>
                        <span class="pt-1 ml-2 font-bold text-sm font-bold">{!! $post->user->username !!}</span>
                    </div>
                    <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i
                            class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
                </div>
                <img class="w-full bg-cover" src="/images/{!! $post->image !!}">
                <div class="px-3 pb-2">
                    <div class="pt-2">
                        <a class="text-sm text-gray-400 font-medium" href="javascript:alert(2)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="hero-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </a>

                        <span class="text-sm text-gray-400 font-medium">{!! $post->likes !!} likes</span>
                    </div>
                    <div class="pt-1">
                        <div class="mb-2 text-sm">
                            <span class="font-medium mr-2 font-bold">{!! $post->user->username !!}</span> 
                                {!! $post->caption !!}
                        </div>
                    </div>
                    <div class="text-sm mb-2 text-gray-400 cursor-pointer font-medium">View all 14 comments</div>
                    <div class="mb-2">
                        <div class="mb-2 text-sm">
                            <span class="font-medium mr-2">razzle_dazzle</span> Dude! How cool! I went to New
                            Zealand last summer and had a blast taking the tour! So much to see! Make sure you bring
                            a good camera when you go!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
