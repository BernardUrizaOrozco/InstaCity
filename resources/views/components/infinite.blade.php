<div class="p-6 bg-white border-b border-gray-200">
    @if($posts)
    @foreach($posts as $post)
    <x-insta :post="$post"/>
    <br>
    @endforeach
    @endif
</div>
