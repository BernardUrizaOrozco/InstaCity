<div class="bg-white border d-block lg:mx-0 m-auto mx-3 overflow-hidden rounded" style="
    max-width: 724px;
    display: block;
    margin: auto;
">
    <div class="w-full flex justify-between p-3 border-b">
        <a href="/show/{!! $post->user->username !!}" class="mr-2 flex font-bold hover:underline self-center">
            <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                <img src="/images/{{ $post->user->profile->image }}" alt="profilepic">
            </div>
            <span class="pt-1 ml-2 font-bold text-sm">{!! $post->user->username !!}</span>
        </a>
    </div>
    <a href="/post/{!! $post->id !!}">
        <img class="w-full bg-cover border-b" src="/images/{!! $post->image !!}">
    </a>
    <div class="px-3 pb-2">
        <div class="pt-2">
            <a class="text-sm text-gray-400 font-medium" href="javascript:alert(2)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="hero-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </a>
            <span class="text-sm text-gray-400 font-medium">{!! $post->likes !!} likes</span>
        </div>
        <div class="pt-1">
            <div class="mb-2 text-sm">
                <a href="/show/{!! $post->user->username !!}" class="mr-2 font-bold hover:underline">{!! $post->user->username !!}</a>
                {!! $post->caption !!}
            </div>
        </div>
        <div class="text-sm mb-2 text-gray-400 font-medium">Showing {!! $post->comments->count() !!}
            comments</div>
        <div class="mb-2">
            @foreach($post->comments as $comment)
            <div class="mb-2 text-sm">
                <a href="/show/{!! $comment->user->username !!}" class="mr-2 font-bold hover:underline">{!!
                    $comment->user->username !!}</a> {!!
                $comment->caption !!}
            </div>
            @foreach($comment->responses as $response)
            <div class="mb-2 ml-6 text-sm">
                <a href="/show/{!! $response->user->username !!}" class="mr-2 font-bold hover:underline">{!! $response->user->username !!}</a> {!!
                $response->caption !!}
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
    @if( $canComment  )
        <x-commenting :post="$post" />
    @endif
</div>
