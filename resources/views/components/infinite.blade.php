<div class="p-6 bg-white border-b border-gray-200">
    <table>
        @if($posts && is_array($posts))
        @foreach($posts as $key=>$post)
        <td>key : {{$key}}</td>
        @foreach($post as $index=>$data)
        <tr>
            <td>{{$index}}</td>
            <td>{{$data}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2">
                <a href="/post/{{$post["id"]}}">
                    <img src="{{$post["image"]}}" />
                </a>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</div>
