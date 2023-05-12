<div>
    <div class="body">
        <div class="conainer" style="width: 1000px;">



            <div class="mt-5">
                <input type="text" class="form-control mb-2" placeholder="Author" wire:model="author">
                <input type="text" class="form-control" placeholder="Title" wire:model="title">
            </div>
            <div class="d-flex mt-2">
                <select class="form-select" wire:model="category_id">
                    <option value="">Select a Category</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-group-lg mt-3">
                <textarea class="form-control form-control-lg createcolor" placeholder="What's on your mind?" wire:model="content"></textarea>
            </div>


            <a class="mt-3 float-end btn btn-primary p-3 text-white" wire:click.prevent="store()" href="/">Post</a>      <br> <br> <br>
        </div>
        <style>
            .body{
                display: grid;
                place-content: center;
            }


        </style>

    </div>

</div>







