<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <?php echo var_export($posts, true) ?>
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
        </div>
    </div>
</x-app-layout>
