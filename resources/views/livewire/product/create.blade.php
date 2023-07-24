<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Price:</label>
        <textarea type="number" class="form-control" id="exampleFormControlInput2" wire:model="price" placeholder="Enter price"></textarea>
        @error('price') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>