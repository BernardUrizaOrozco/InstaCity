<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center h-screen w-full bg-teal-lighter">
                    <div class="w-full bg-blue-200 rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
                        <h1 class="block w-full text-center text-grey-darkest mb-6">Sign Up</h1>
                        <form action="/p" enctype="multipart/form-data" method="post">
                            @csrf
                    
                            <div class="row">
                                <div class="col-8 offset-2">
                    
                                    <div class="row">
                                        <h1>Add New Post</h1>
                                    </div>
                                    <div class="form-group row">
                                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    
                                        <input id="caption"
                                               type="text"
                                               class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                                               name="caption"
                                               value="{{ old('caption') }}"
                                               autocomplete="caption" autofocus>
                    
                                        @if ($errors->has('caption'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('caption') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                    
                                    <div class="row">
                                        <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    
                                        <input type="file" class="form-control-file" id="image" name="image">
                    
                                        @if ($errors->has('image'))
                                            <strong>{{ $errors->first('image') }}</strong>
                                        @endif
                                    </div>
                                    <input type="file" multiple id="gallery-photo-add">
                                    <div class="gallery"></div>
                                    <div class="row pt-4">
                                        <button class="btn btn-primary">Add New Post</button>
                                    </div>
                    
                                </div>
                            </div>
                        </form>
                        <a class="link link-grey w-full text-center" href="/login">Already have an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>