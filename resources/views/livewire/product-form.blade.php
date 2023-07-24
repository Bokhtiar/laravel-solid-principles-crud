@section('content')
<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
        <label for="exampleInputEmail">Price</label>
        <input type="number" class="form-control" id="exampleInputEmail" placeholder="Enter price" wire:model="price">
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  

    <button type="submit" class="btn btn-primary">Save Contact</button>

</form>
@endsection