<div>
    <p class="text-lg leading-6 font-medium text-gray-900">Suggestions For You</p>
    @if($followings)
    @foreach($followings as $following)
    @if( ( ! Auth::user()->following->where('id','=',$following->id)->first() ) && ( Auth::user()->id !=
    $following->id ) )
    <br>
    <div class="relative">
        <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md">
                <img src="/images/{{ $following->profile->image }}" alt="profilepic">
            </div>
            <div class="ml-16 text-lg leading-6 font-medium text-gray-900">
                <!-- follow button 
                <form method="POST" class="d-none" name="form{{ $following->profile->id }}" action="{{ route('follow') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="follow" value="{{ $following->profile->id }}" />
                    <button type="submit" class="bg-blue-500 px-2 py-1 
                        text-white font-semibold text-sm rounded text-center 
                        sm:inline-block block">Follow</button>
                    <form>-->
                <a href="/show/{{ $following->username }}">{{ "@".$following->username }}</a>
            </div>
        </dt>
        <dd class="mt-2 ml-16 text-base text-gray-500">
            {{ $following->name }}
        </dd>
        <dd class="mt-2 ml-16 text-base text-gray-500">
            {{ $following->profile->description }}
        </dd>
    </div>
    @endif
    @endforeach
    @endif
</div>
