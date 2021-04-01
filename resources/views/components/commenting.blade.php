<form action="/" method="POST">
    <div class="flex border-t">
        <div class="flex-shrink flex justify-center w-16 h-12">
            <a href="/me" class="mr-2 font-bold hover:underline self-center cursor-pointer">
                <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center overflow-hidden">
                    <img src="/images/{{ Auth::user()->profile->image }}" alt="profilepic">
                </div>
            </a>
        </div>
        <div class="flex-grow flex">
            <input type="text" placeholder="Custom focus style"
                class="border-none focus:border-transparent w-full self-center" />
        </div>
        <div class="flex-shrink w-16 h-12 flex">
            <input type="text" class="hidden" name="post_id" value="{{ $post->id }}">
            <button class="text-blue-400 hover:text-blue-800 self-center" type="submit">Post</button>
        </div>
    </div>
</form>
