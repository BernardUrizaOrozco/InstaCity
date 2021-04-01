<header class="flex flex-wrap items-center p-4 md:py-8">

    <div class="md:w-3/12 md:ml-16">
        <!-- profile image -->
        <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                   border-2 border-pink-600 p-1" src="/images/{{ $user->profile->image }}" alt="profile">
    </div>

    <!-- profile meta -->
    <div class="w-8/12 md:w-7/12 ml-4">
        <div class="md:flex md:flex-wrap md:items-center mb-4">
            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
                {{ $user->username }}
            </h2>

            <!-- badge -->
            <span class="inline-block fas fa-certificate fa-lg text-blue-500 
                             relative mr-6 text-xl transform -translate-y-2" aria-hidden="true">
                <i class="fas fa-check text-white text-xs absolute inset-x-0
                             ml-1 mt-px"></i>
            </span>

            @if( Auth::user()->id == $user->id )
            <!-- follow button -->
            <a href="#" class="bg-white px-2 py-1 border
                      text-black font-semibold text-sm rounded text-center 
                      sm:inline-block block">Edit profile</a>
            @else
            @if( $user->profile->followers->where('id','=',Auth::user()->id)->first() )

            <!-- unfollow button -->
            <form method="GET" action="/unfollow/{{ $user->id }}">
                <button type="submit" class="bg-white border px-2 py-1 
                                    text-black font-semibold text-sm rounded text-center 
                                    sm:inline-block block">Unfollow</button>
                <form>
                    @else
                    <!-- follow button -->
                    <form method="GET" action="/follow/{{ $user->id }}">
                        <button type="submit" class="bg-blue-500 px-2 py-1 
                            text-white font-semibold text-sm rounded text-center 
                            sm:inline-block block">Follow</button>
                        <form>
                            @endif

                            @endif
        </div>

        <!-- post, following, followers list for medium screens -->
        <ul class="hidden md:flex space-x-8 mb-4">
            <li>
                <span class="font-semibold">{{ $user->posts->count() }}</span>
                posts
            </li>

            <li>
                <span class="font-semibold">{{ $user->profile->followers->count() }}</span>
                followers
            </li>
            <li>
                <span class="font-semibold">{{ $user->following->count() }}</span>
                following
            </li>
        </ul>

        <!-- user meta form medium screens -->
        <div class="hidden md:block">
            <h1 class="font-semibold">{{ $user->name }}</h1>
            <p>{{ $user->profile->description }}</p>
        </div>

    </div>

    <!-- user meta form small screens -->
    <div class="md:hidden text-sm my-2">
        <h1 class="font-semibold">{{ $user->name }}</h1>
        <p>{{ $user->profile->description }}</p>
    </div>

</header>
