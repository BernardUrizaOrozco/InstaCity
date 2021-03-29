<div>
    <p> He who is contented is rich. - Laozi </p>
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
                        <td colspan="2"><img src="{{$post["image"]}}" /></td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
</div>