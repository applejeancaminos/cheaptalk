<div>
    <div class="body">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert mt-3 alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif


            <div class="w-50 mt-4">

                <input type="text" class="form-control me-2" placeholder="&searhk; Author" wire:model="postSearch">
                <br>
                <select class="form-select " wire:model="postCategory">
                    <option value="" disabled>Select a Category</option>
                    <option value="all">All</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>



            </div>



            @foreach ( $posts as $post )
            <div class="card mt-3 shadow w-50">
                <div class="card-header bg-warning text-white justify-content-between">
                    <h3>Author - {{ $post->author }}</h3>
                    <h6>Category: {{ $post->category->category }}</h6>
                    <h5>Title: {{ $post->title }}</h5>
                    <h4>Content: {{ $post->content }}</h4>
                </div>


            </div>

        @endforeach

        <div class="pagination justify-content-center mt-3">
            {{ $posts }}

        </div>

        </div>
        <style>
            .body{
                display: grid;
                place-content: center;
            }


        </style>

    </div>

</div>

