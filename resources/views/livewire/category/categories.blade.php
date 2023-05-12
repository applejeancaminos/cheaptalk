

<div>
    @if (session()->has('message'))
        <div class="alert  mt-3 alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('deleted'))
        <div class="alert mt-3 alert-danger text-center">
            {{ session('deleted') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert mt-3 alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

<div class="body">
    <div class="container mt-5" style="width: 1000;">


        <div class="mb-3">
            <input type="text" class="form-control mb-2" placeholder="Category" wire:model="category">
            <textarea rows="1" cols="5" type="text" placeholder="Remarks" class="form-control" wire:model="remarks"></textarea>
        </div>
        @foreach ( $categories as $category )
    <div class="card m-5">
        <div class="card-body">

            <h1>Category: {{ $category->category }}</h1>
            <h1>Remarks:{{ $category->remarks }} </h1>

        </div>
    </div>
    @endforeach


    <button type="button" class="btn mt-3 float-end btn btn-primary p-3 text-white" data-bs-dismiss="modal" wire:click="store()">Add Category</button> <br> <br> <br>
</div>
<style>
    .body{
        display: grid;
        place-content: center;
    }


</style>
</div>


</div>




