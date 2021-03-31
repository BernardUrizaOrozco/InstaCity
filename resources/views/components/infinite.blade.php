<div class="p-6 bg-white border-b border-gray-200">
    <table>
        @if($posts)
        @foreach($posts as $post)
        @foreach($post->toArray() as $index=>$data)
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
        <tr>
            <td colspan="2">
                @foreach($post->comments as $comment)
                    <br>
                    @foreach($comment->toArray() as $index=>$data)
                        <p>{{$index}} {{$data}}</p>
                    @endforeach

                    <p>RESPUESTAS AL COMMENT</p>
                    @foreach($comment->responses as $response)
                        @foreach($response->toArray() as $indexResponse=>$dataResponse)
                            <p>{{$indexResponse}} - {{$dataResponse}}</p>
                        @endforeach
                    @endforeach

                @endforeach
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</div>
