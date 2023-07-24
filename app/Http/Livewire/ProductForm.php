<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public $name;
    public $price;

    public function submit()
    {
        dd('test');
        $validatedData = $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        Product::create($validatedData);

        return redirect()->to('/product');
    }

    public function render()
    {
        return view('livewire.product-form');
    }
}
