<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowProduct extends Component
{
    
    public $product;

    public function mount($id)
    {
        $this->product = Product::find($id);
    }
    public function render()
    {
        $product = $this->product;
        return view('livewire.show-product', ['product' => $product]);
    }
}
